@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('hosting::productos.title.productos') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li class="active">{{ trans('hosting::productos.title.productos') }}</li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
                    <a href="{{ route('admin.hosting.producto.create') }}" class="btn btn-primary btn-flat" style="padding: 4px 10px;">
                        <i class="fa fa-pencil"></i> {{ trans('hosting::productos.button.create producto') }}
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
                            <th>Nombre</th>
                            <th>Desc.</th>
                            <th>Servidor</th>
                            <th>Paquete</th>
                            <th>HD</th>
                            <th>BW</th>
                            <th>Email</th>
                            <th>FTP</th>
                            <th>MySQL</th>
                            <th>Listas Correo</th>
                            <th>Subdom.</th>
                            <th>Parks.</th>
                            <th>Addon</th>
                            <th>Oculto</th>
                            <th>Paytype</th>
                            <th>Subdom</th>
                            <th>Autosetup</th>
                            <th>Tipo server</th>
                            <th>{{ trans('core::core.table.created at') }}</th>
                            <th>{{ trans('core::core.table.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (isset($productos)): ?>
                        <?php foreach ($productos as $producto): ?>
                        <tr>
                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->id }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->name }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->description }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->server_id }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->paquete }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->disklimit }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->bwlimit }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->emailaccounts }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->ftpaccounts }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->mysqldatabases }}
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->mailinglists }}
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->subdomains }}
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->parkeddomains }}
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->addondomains }}
                                </a>
                            </td>
<!--
                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->dedicatedip }}
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->cgiaccess }}
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->shellaccess }}
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->frontpageextensions }}
                                </a>
                            </td>
-->
                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->hidden }}
                                </a>
                            </td>
<!--
                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->showdomainoptions }}
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->welcomeemail }}
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->stockcontrol }}
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->qty }}
                                </a>
                            </td>
-->
                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->paytype }}
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->subdomain }}
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->autosetup }}
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->servertype }}
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}">
                                    {{ $producto->created_at }}
                                </a>
                            </td>

                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.hosting.producto.edit', [$producto->id]) }}" class="btn btn-default btn-flat"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <button class="btn btn-danger btn-flat" data-toggle="modal" data-target="#confirmation-{{ $producto->id }}"><i class="glyphicon glyphicon-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Desc.</th>
                            <th>Servidor</th>
                            <th>Paquete</th>
                            <th>HD</th>
                            <th>BW</th>
                            <th>Email</th>
                            <th>FTP</th>
                            <th>MySQL</th>
                            <th>Listas Correo</th>
                            <th>Subdom.</th>
                            <th>Parks.</th>
                            <th>Addon</th>
                            <th>Oculto</th>
                            <th>Paytype</th>
                            <th>Subdom</th>
                            <th>Autosetup</th>
                            <th>Tipo server</th>
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
    <?php if (isset($productos)): ?>
    <?php foreach ($productos as $producto): ?>
    <!-- Modal -->
    <div class="modal fade modal-danger" id="confirmation-{{ $producto->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                    {!! Form::open(['route' => ['admin.hosting.producto.destroy', $producto->id], 'method' => 'delete', 'class' => 'pull-left']) !!}
                    <button type="submit" class="btn btn-outline btn-flat"><i class="glyphicon glyphicon-trash"></i> {{ trans('core::core.button.delete') }}</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
@stop

@section('footer')
    <a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
    <dl class="dl-horizontal">
        <dt><code>c</code></dt>
        <dd>{{ trans('hosting::productos.title.create producto') }}</dd>
    </dl>
@stop

@section('scripts')
    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).keypressAction({
                actions: [
                    { key: 'c', route: "<?= route('admin.hosting.producto.create') ?>" }
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
@stop
