<div class="box-body">
	{!! Form::normalInput('name', 'Nombre', $errors) !!}
    {!! Form::normalInput('sku', 'SKU', $errors) !!}
    {!! Form::normalInput('price', 'Precio', $errors) !!}
	{!! Form::normalInput('disklimit', 'Límite disco', $errors) !!}
	{!! Form::normalInput('bwlimit', 'Ancho de banda', $errors) !!}
	{!! Form::normalInput('emailaccounts', 'Cuentas e-mail', $errors) !!}
	{!! Form::normalInput('ftpaccounts', 'Cuentas FTP', $errors) !!}
    {!! Form::normalInput('mysqldatabases', 'Bases de datos MySql', $errors) !!}
    {!! Form::normalInput('mailinglists', 'Listas de correo', $errors) !!}
    {!! Form::normalInput('subdomains', 'Subdominios', $errors) !!}
    {!! Form::normalInput('parkeddomains', 'Dominios aparcados', $errors) !!}
    {!! Form::normalInput('addonsdomains', 'Dominios añadidos', $errors) !!}
	{!! Form::normalInput('paquete', 'Paquete', $errors) !!}
	{!! Form::normalInput('type', 'Tipo', $errors, null,['value="hostingaccount"']) !!}
    {!! Form::normalTextarea('description', 'Descripción', $errors) !!}
    {!! Form::normalInput('hidden', 'Oculto', $errors, ['value="0"']) !!}
    {!! Form::normalInput('showdomainoptions', 'Mostrar Opciones de dominio', $errors, ['value="1"']) !!}
    {!! Form::normalInput('welcomeemail', 'E-mail de bienvenida', $errors, null,['value="1"']) !!}
    {!! Form::normalInput('stockcontrol', 'Control de stock', $errors, null,['value="0"']) !!}
    {!! Form::normalInput('paytype', 'Modo de pago', $errors, null,['value="paypal"']) !!}
    {!! Form::normalInput('subdomain', 'Subdominio:', $errors, null,['value=".ezetahosting.com"']) !!}
    {!! Form::normalInput('autosetup', 'Autosetup', $errors, null,['value="1"']) !!}
    {!! Form::normalInput('servertype', 'Tipo de servidor', $errors, null,['value="cpanel"']) !!}
    {!! Form::normalInput('server_id', 'ID Servidor', $errors, null,['value="1"']) !!}
</div>
