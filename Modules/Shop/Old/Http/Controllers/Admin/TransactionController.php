<?php namespace Modules\Shop\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Shop\Entities\Transaction;
use Modules\Shop\Repositories\TransactionRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class TransactionController extends AdminBaseController
{
    /**
     * @var TransactionRepository
     */
    private $transaction;

    public function __construct(TransactionRepository $transaction)
    {
        parent::__construct();

        $this->transaction = $transaction;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$transactions = $this->transaction->all();

        return view('shop::admin.transactions.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('shop::admin.transactions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->transaction->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('shop::transactions.title.transactions')]));

        return redirect()->route('admin.shop.transaction.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Transaction $transaction
     * @return Response
     */
    public function edit(Transaction $transaction)
    {
        return view('shop::admin.transactions.edit', compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Transaction $transaction
     * @param  Request $request
     * @return Response
     */
    public function update(Transaction $transaction, Request $request)
    {
        $this->transaction->update($transaction, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('shop::transactions.title.transactions')]));

        return redirect()->route('admin.shop.transaction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Transaction $transaction
     * @return Response
     */
    public function destroy(Transaction $transaction)
    {
        $this->transaction->destroy($transaction);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('shop::transactions.title.transactions')]));

        return redirect()->route('admin.shop.transaction.index');
    }
}
