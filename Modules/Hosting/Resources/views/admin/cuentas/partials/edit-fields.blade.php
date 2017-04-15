<div class="box-body">
	{!! Form::normalInput('dominio', 'Dominio', $errors, $cuenta) !!}
	{!! Form::normalInput('nombre', 'Nombre', $errors, $cuenta) !!}
	{!! Form::normalInput('limitedisco', 'Límite disco', $errors, $cuenta) !!}
	{!! Form::normalInput('limitecuota', 'Ancho de banda', $errors, $cuenta) !!}
	{!! Form::normalInput('cuentasemail', 'Cuentas e-mail', $errors, $cuenta) !!}
	{!! Form::normalInput('cuentasftp', 'Cuentas FTP', $errors, $cuenta) !!}
	{!! Form::normalInput('servidor', 'Servidor', $errors, $cuenta) !!}
	{!! Form::normalInput('paquete', 'Paquete', $errors, $cuenta) !!}
</div>
