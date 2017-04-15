<?php namespace Modules\Hosting\Http\Controllers\Admin;

use Carbon\Carbon;
use Gufy\CpanelWhm\Facades\CpanelWhm;
use Illuminate\Support\Facades\Log;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Hosting\Entities\Cuenta;
use Modules\Hosting\Entities\Producto;
use Modules\Hosting\Http\Requests\CreateCuentaRequest;
use Modules\Hosting\Http\Requests\UpdateCuentaRequest;
use Modules\User\Entities\Sentinel\User;
use Modules\Hosting\Repositories\CuentaRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
Use Mail;

class CuentaController extends AdminBaseController
{
    /**
     * @var CuentaRepository
     */
    private $cuenta;

    public function __construct(CuentaRepository $cuenta)
    {
        parent::__construct();

        $this->cuenta = $cuenta;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$cuentas = Cuenta::with('user')->get();
        $cuentas = \Modules\Hosting\Entities\Cuenta::all();
        return view('hosting::admin.cuentas.index', compact('cuentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($user_id = null, $producto_id = null, $domain = null)
    {
        $cuenta = new Cuenta;
        $cuenta->user_id = $user_id;
        if (isset($producto_id)) {
            $producto = Producto::findOrFail($producto_id);
            $cuenta->name = $producto->name;
            $cuenta->disklimit = $producto->disklimit;
            $cuenta->bwlimit = $producto->bwlimit;
            $cuenta->paquete = $producto->paquete;
            $cuenta->server = $producto->server_id;
            $cuenta->order_id = 0;

            //TODO: añadir precios de los productos.
            $cuenta->firstpaymentamount = 10;
            $cuenta->amount = 10;
            $cuenta->billingcycle = 'anual';
        }
        $cuenta->domain = $domain;
        return view('hosting::admin.cuentas.create', array('cuenta' => $cuenta));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateCuentaRequest $request
     * @return Response
     */
    public function store(CreateCuentaRequest $request)
    {
        $user = User::find($request->user_id);
        $email = $user->email;

        $cuenta = new Cuenta;
        $cuenta->user_id = $user->id;
        $cuenta->domain = $request->domain;
        $cuenta->disklimit = $request->disklimit;
        $cuenta->bwlimit = $request->bwlimit;
        $cuenta->paquete = $request->paquete;
        $cuenta->server = $request->input('server');
        $cuenta->order_id = $request->order_id;
        $cuenta->billingcycle = $request->billingcycle;
        $cuenta->regdate = Carbon::now();
        if ($cuenta->billingcycle == 'anual') {
            $cuenta->nextduedate = Carbon::now()->addYear();
            $cuenta->nextinvoicedate = Carbon::now()->addYear();
        } elseif ($cuenta->billingcycle == 'semestral') {
            $cuenta->nextduedate = Carbon::now()->addMonths(6);
            $cuenta->nextinvoicedate = Carbon::now()->addMonths(6);
        } elseif ($cuenta->billingcycle == 'trimestral') {
            $cuenta->nextduedate = Carbon::now()->addMonths(3);
            $cuenta->nextinvoicedate = Carbon::now()->addMonths(3);
        } elseif ($cuenta->billingcycle == 'mensual') {
            $cuenta->nextduedate = Carbon::now()->addMonth();
            $cuenta->nextinvoicedate = Carbon::now()->addMonths(6);
        } else {
            // Suponemos anual:
            $cuenta->nextduedate = Carbon::now()->addYear();
            $cuenta->nextinvoicedate = Carbon::now()->addYear();
        }
        $cuenta->domainstatus = 'Activo';
        $cuenta->username = substr(preg_replace('/[^A-Za-z0-9\-]/', '', $request->domain),0,8);
        $cuenta->password = str_random(12);
        $cuenta->notes = $request->notes;
        // TODO: Implementar sistema de códigos promocionales
        if ($request->promocode == 'betatester') {
            $cuenta->promoid = 1;
            $cuenta->paymentmethod = 'gratis';
            $cuenta->firstpaymentamount = 0;
            $cuenta->amount = 0;
        } else {
            $cuenta->promoid = 0;
            $cuenta->paymentmethod = $request->paymentmethod;
            $cuenta->firstpaymentamount = $request->firstpaymentamount;
            $cuenta->amount = $request->amount;
        }
        $cuenta->suspendreason = '';
        if ($request->overideautosuspend == '') {
            $cuenta->overideautosuspend = 0;
        } else {
            $cuenta->overideautosuspend = $request->overideautosuspend;
        }
        $cuenta->overidesuspenduntil = $request->overidesuspenduntil;
        $cuenta->ip = $request->ip;
        $cuenta->ns1 = $request->ns1;
        $cuenta->ns2 = $request->ns2;

        $cuenta->save();

        // No usamos el método que venía por defecto para insertar.
        // Así aumentamos la seguridad, usando fillable=[] y añadiendo aquí algunos valores manualmente.
        //$this->cuenta->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('hostingmodule::cuentas.title.cuentas')]));

        $respuesta = CpanelWhm::createacct(['username' => $cuenta->username, 'domain' => $cuenta->domain, 'password' => $cuenta->password, 'plan' => $cuenta->paquete, 'contactemail' => $email]);


        Mail::send(['hosting::emails.html.cuentacreada', 'hosting::emails.text.cuentacreada'], ['user' => $user, 'cuenta' => $cuenta], function($m) use ($user) {
            $m->from('no-responder@ezetahosting.com', 'Equipo ezeta');
            $m->to($user->email, $user->name)->subject('Cuenta de hosting creada.');
        });


        Log::info($respuesta);

        // La respuesta devuelve un array dentro de un array. Para acceder a los valores usamos:
        $respuesta = array_values(array_values($respuesta)[0])[0];

        return view('hosting::admin.cuentas.creada')->with('respuesta', $respuesta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Cuenta $cuenta
     * @return Response
     */
    public function edit(Cuenta $cuenta)
    {
        return view('hosting::admin.cuentas.edit', compact('cuenta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Cuenta $cuenta
     * @param  UpdateCuentaRequest $request
     * @return Response
     */
    public function update(Cuenta $cuenta, UpdateCuentaRequest $request)
    {
        $this->cuenta->update($cuenta, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('hostingmodule::cuentas.title.cuentas')]));

        return redirect()->route('admin.hosting.cuenta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Cuenta $cuenta
     * @return Response
     */
    public function destroy(Cuenta $cuenta)
    {
        $this->cuenta->destroy($cuenta);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('hostingmodule::cuentas.title.cuentas')]));

        return redirect()->route('admin.hosting.cuenta.index');
    }
}
