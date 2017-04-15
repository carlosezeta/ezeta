<div class="box-body">
	{!! Form::normalInput('name', 'Nombre', $errors, $producto) !!}
	{!! Form::normalInput('price', 'Precio Mensual', $errors, $producto) !!}
	{!! Form::normalInput('disklimit', 'Límite disco', $errors, $producto) !!}
	{!! Form::normalInput('bwlimit', 'Ancho de banda', $errors, $producto) !!}
	{!! Form::normalInput('emailaccounts', 'Cuentas e-mail', $errors, $producto) !!}
	{!! Form::normalInput('ftpaccounts', 'Cuentas FTP', $errors, $producto) !!}
	{!! Form::normalInput('mysqldatabases', 'Bases de datos MySql', $errors, $producto) !!}
	{!! Form::normalInput('mailinglists', 'Listas de correo', $errors, $producto) !!}
	{!! Form::normalInput('subdomains', 'Subdominios', $errors, $producto) !!}
	{!! Form::normalInput('parkeddomains', 'Dominios aparcados', $errors, $producto) !!}
	{!! Form::normalInput('addonsdomains', 'Dominios añadidos', $errors, $producto) !!}
	{!! Form::normalInput('paquete', 'Paquete', $errors, $producto) !!}
	{!! Form::normalInput('type', 'Tipo', $errors, $producto) !!}
	{!! Form::normalTextarea('description', 'Descripción', $errors, $producto) !!}
	{!! Form::normalInput('hidden', 'Oculto', $errors, $producto) !!}
	{!! Form::normalInput('showdomainoptions', 'Mostrar Opciones de dominio', $errors, $producto) !!}
	{!! Form::normalInput('welcomeemail', 'E-mail de bienvenida', $errors, $producto) !!}
	{!! Form::normalInput('stockcontrol', 'Control de stock', $errors, $producto) !!}
	{!! Form::normalInput('paytype', 'Modo de pago', $errors, $producto) !!}
	{!! Form::normalInput('subdomain', 'Subdominio:', $errors, $producto) !!}
	{!! Form::normalInput('autosetup', 'Autosetup', $errors, $producto) !!}
	{!! Form::normalInput('servertype', 'Tipo de servidor', $errors, $producto) !!}
	{!! Form::normalInput('server_id', 'ID Servidor', $errors, $producto) !!}
</div>
