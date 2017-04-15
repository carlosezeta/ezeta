<div class="box-body">
	{!! Form::normalInput('domain', 'Dominio', $errors, $cuenta) !!}
	{!! Form::normalInput('user_id', 'User id', $errors, $cuenta) !!}
	{!! Form::normalInput('name', 'Nombre', $errors, $cuenta) !!}
	{!! Form::normalInput('disklimit', 'Límite disco', $errors, $cuenta) !!}
	{!! Form::normalInput('bwlimit', 'Ancho de banda', $errors, $cuenta) !!}
	{!! Form::normalInput('server', 'Servidor', $errors, $cuenta) !!}
	{!! Form::normalInput('order_id', 'ID Pedido', $errors, $cuenta) !!}
	{!! Form::normalInput('paquete', 'Paquete', $errors, $cuenta) !!}
	{!! Form::normalInput('paymentmethod', 'Método de pago', $errors, $cuenta) !!}
	{!! Form::normalInput('firstpaymentamount', 'Importe primer pago', $errors, $cuenta) !!}
	{!! Form::normalInput('amount', 'Importe recursivo', $errors, $cuenta) !!}
	{!! Form::normalInput('billingcycle', 'Ciclo de facturación', $errors, $cuenta) !!}
	{!! Form::normalInput('regdate', 'Fecha de registro', $errors, $cuenta) !!}
	{!! Form::normalInput('nextduedate', 'Fecha de vencimiento', $errors, $cuenta) !!}
	{!! Form::normalInput('nextinvoicedate', 'Fecha próxima factura', $errors, $cuenta) !!}
	{!! Form::normalInput('username', 'Usuario', $errors, $cuenta) !!}
	{!! Form::normalInput('password', 'Contraseña', $errors, $cuenta) !!}
	{!! Form::normalTextarea('notes', 'Notas', $errors, $cuenta) !!}
	{!! Form::normalInput('promocode', 'Código Promocional', $errors, $cuenta) !!}
	{!! Form::normalInput('ns1', 'Nameserver 1', $errors, $cuenta) !!}
	{!! Form::normalInput('ns2', 'Nameserver 2', $errors, $cuenta) !!}
</div>