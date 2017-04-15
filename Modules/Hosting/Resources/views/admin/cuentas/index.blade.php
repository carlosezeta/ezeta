@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('hosting::cuentas.title.cuentas') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li class="active">{{ trans('hosting::cuentas.title.cuentas') }}</li>
    </ol>
@hosting

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
                    <a href="{{ route('admin.hosting.cuenta.create') }}" class="btn btn-primary btn-flat" style="padding: 4px 10px;">
                        <i class="fa fa-pencil"></i> {{ trans('hosting::cuentas.button.create cuenta') }}
                    </a>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="data-table table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Dominio</th>
                            <th>User</th>
                            <th>HD</th>
                            <th>BW</th>
                            <th>Paquete</th>
                            <th>Modo Pago</th>
                            <th>1er pago</th>
                            <th>Recursivo</th>
                            <th>Ciclo</th>
                            <th>Registro</th>
                            <th>Vencimiento</th>
                            <th>Fecha Factura</th>
                            <th>Estado</th>
                            <th>{{ trans('core::core.table.created at') }}</th>
                            <th>{{ trans('core::core.table.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (isset($cuentas)): ?>
                        <?php foreach ($cuentas as $cuenta): ?>
                        <tr>
                            <td><a href="{{ route('admin.hosting.cuenta.edit', [$cuenta->id]) }}">
                                    {{ $cuenta->id }}
                                </a></td>
                            <td><a href="http://{{ $cuenta->dominio }}">
                                    {{ $cuenta->domain }}
                                </a></td>
                            <td><a href="{{ URL::route('admin.user.user.edit', [$cuenta->user_id]) }}">
                                    {{ $cuenta->user->first_name }}
                                </a></td>
                            <td><a href="{{ route('admin.hosting.cuenta.edit', [$cuenta->id]) }}">
                                    {{ $cuenta->disklimit }}
                                </a></td>
                            <td><a href="{{ route('admin.hosting.cuenta.edit', [$cuenta->id]) }}">
                                    {{ $cuenta->bwlimit }}
                                </a></td>
                            <td><a href="{{ route('admin.hosting.cuenta.edit', [$cuenta->id]) }}">
                                    {{ $cuenta->paquete }}
                                </a></td>
                            <td><a href="{{ route('admin.hosting.cuenta.edit', [$cuenta->id]) }}">
                                    {{ $cuenta->paymentmethod }}
                                </a></td>
                            <td><a href="{{ route('admin.hosting.cuenta.edit', [$cuenta->id]) }}">
                                    {{ $cuenta->firstpaymentamount }}
                                </a></td>
                            <td><a href="{{ route('admin.hosting.cuenta.edit', [$cuenta->id]) }}">
                                    {{ $cuenta->amount }}
                                </a></td>
                            <td><a href="{{ route('admin.hosting.cuenta.edit', [$cuenta->id]) }}">
                                    {{ $cuenta->billingcycle }}
                                </a></td>
                            <td><a href="{{ route('admin.hosting.cuenta.edit', [$cuenta->id]) }}">
                                    {{ $cuenta->regdate }}
                                </a></td>
                            <td><a href="{{ route('admin.hosting.cuenta.edit', [$cuenta->id]) }}">
                                    {{ $cuenta->nextduedate }}
                                </a></td>
                            <td><a href="{{ route('admin.hosting.cuenta.edit', [$cuenta->id]) }}">
                                    {{ $cuenta->nextinvoicedate }}
                                </a></td>
                            <td><a href="{{ route('admin.hosting.cuenta.edit', [$cuenta->id]) }}">
                                    {{ $cuenta->domainstatus }}
                                </a></td>
                            <td>
                                <form action="http://cpanel.ezetahosting.com:2082/login/" method="post">
                                    <input type="hidden" name="user" value="{{ $cuenta->username }}">
                                    <input type="hidden" name="pass" value="{{ $cuenta->password }}">
                                    <input type="hidden" name="failurl" value="http://cpanel.ezetahosting.com:2082/login/">
                                    <input type="hidden" name="login_theme" value="default">
                                    <input type="submit" value="Login" class="btn btn-primary">
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('admin.hosting.cuenta.edit', [$cuenta->id]) }}">
                                    {{ $cuenta->created_at }}
                                </a>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.hosting.cuenta.edit', [$cuenta->id]) }}" class="btn btn-default btn-flat"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <button class="btn btn-danger btn-flat" data-toggle="modal" data-target="#confirmation-{{ $cuenta->id }}"><i class="glyphicon glyphicon-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Dominio</th>
                            <th>User</th>
                            <th>HD</th>
                            <th>BW</th>
                            <th>Paquete</th>
                            <th>Modo Pago</th>
                            <th>1er pago</th>
                            <th>Recursivo</th>
                            <th>Ciclo</th>
                            <th>Registro</th>
                            <th>Vencimiento</th>
                            <th>Fecha Factura</th>
                            <th>Estado</th>
                            <th>{{ trans('core::core.table.created at') }}</th>
                            <th>{{ trans('core::core.table.actions') }}</th>
                        </tr>
                        </tfoot>
                    </table>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    <?php if (isset($cuentas)): ?>
    <?php foreach ($cuentas as $cuenta): ?>
    <!-- Modal -->
    <div class="modal fade modal-danger" id="confirmation-{{ $cuenta->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{ trans('core::core.modal.title') }}</h4>
                </div>
                <div class="modal-body">
                    {{ trans('core::core.modal.confirmation-message') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline btn-flat" data-dismiss="modal">{{ trans('core::core.button.cancel') }}</button>
                    {!! Form::open(['route' => ['admin.hosting.cuenta.destroy', $cuenta->id], 'method' => 'delete', 'class' => 'pull-left']) !!}
                    <button type="submit" class="btn btn-outline btn-flat"><i class="glyphicon glyphicon-trash"></i> {{ trans('core::core.button.delete') }}</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
@hosting

@section('footer')
    <a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@hosting
@section('shortcuts')
    <dl class="dl-horizontal">
        <dt><code>c</code></dt>
        <dd>{{ trans('hosting::cuentas.title.create cuenta') }}</dd>
    </dl>
@hosting

@section('scripts')
    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).keypressAction({
                actions: [
                    { key: 'c', route: "<?= route('admin.hosting.cuenta.create') ?>" }
                ]
            });
        });
    </script>
    <?php $locale = locale(); ?>
    <script type="text/javascript">
        $(function () {
            $('.data-table').dataTable({
                "paginate": true,
                "lengthChange": true,
                "filter": true,
                "sort": true,
                "info": true,
                "autoWidth": true,
                "order": [[ 0, "desc" ]],
                "language": {
                    "url": '<?php echo Module::asset("core:js/vendor/datatables/{$locale}.json") ?>'
                },
                "columns": [
                    null,
                    null,
                    { "sortable": false }
                ]
            });
        });
    </script>
@hosting
