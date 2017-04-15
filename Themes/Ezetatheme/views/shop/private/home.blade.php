@extends('layouts.master')

@section('title')
    Cesta de la compra | @parent
@stop

@section('header-scripts')
    <link href='https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>

@stop


@section('content')
<div class="tabbable">
    <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#inicio" data-toggle="tab" aria-expanded="true">Área de Clientes</a></li>
        <li class="dropdown">
            <a href="#" id="#hosting" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Servicios<b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="#vtab3">
                <li class=""><a href="#hosting" tabindex="-1" data-toggle="tab" aria-expanded="false">Hosting</a></li>
                <li class=""><a href="#dominios" tabindex="-1" data-toggle="tab" aria-expanded="false">Dominios</a></li>
            </ul>
        </li>
        <li class=""><a href="#tickets" data-toggle="tab" aria-expanded="false">Tickets de Soporte</a></li>
        <li class=""><a href="#facturas" data-toggle="tab" aria-expanded="false">Facturas</a></li>
        <li class=""><a href="#transacciones" data-toggle="tab" aria-expanded="false">Transacciones</a></li>

    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="inicio">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>New Comments!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>New Tasks!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <div class="tab-pane fade" id="hosting">
            <h2>Cuentas de Hosting</h2>
            <table id="table-hosting" class="table table-striped table-bordered hover" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dominio</th>
                    <th>Fecha Contratación</th>
                    <th>Fecha Vencimiento</th>
                    <th></th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Dominio</th>
                    <th>Fecha Contratación</th>
                    <th>Fecha Vencimiento</th>
                    <th></th>
                </tr>
                </tfoot>
                <tbody>
                @foreach ($cuentas as $cuenta)
                    <tr>
                        <td>{{ $cuenta->name }}</td>
                        <td>{{ $cuenta->domain }}</td>
                        <td>{{ $cuenta->created_at }}</td>
                        <td>{{ $cuenta->nextduedate }}</td>
                        <td>Editar</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <div class="tab-pane fade" id="dominios">
            <p>Dominios</p>
        </div>
        <div class="tab-pane fade" id="tickets">
            <p>Tickets</p>
        </div>
        <div class="tab-pane fade" id="facturas">
            <p>Facturas</p>
        </div>
        <div class="tab-pane fade" id="transacciones">
            <p>Transacciones</p>
        </div>
    </div>
</div>


@stop

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table-hosting').DataTable( {
                "paging":   false,
                "info": false
            });
        } );
    </script>


@endsection