@extends('layouts.master')

@section('title')
    Cesta de la compra | @parent
@stop


@section('content')
    <h2 class="title-divider">
        <span>Cesta de la compra</span>
    </h2>
    <div class="row">
        <!--Blog Roll Content-->
        <div class="col-md-12">
            <div id="alert-success" class="alert alert-success" style="display: none;">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <h4>
                    Eliminado
                </h4>
                ¡Producto eliminado correctamente de la cesta!.
            </div>
            <div id="alert-cesta-vacia" class="alert alert-info" style="display: none;">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <h4>
                    Su cesta está vacía
                </h4>
                No hay ningún producto en su cesta de la compra.
            </div>
            <!-- Blog post -->
            <div class="row blog-post">
                <div class="col-md-12">
                    <table id="cesta" class="table table-hover">
                        <thead>
                        <tr>
                            <th>Producto</th>
                            <th class="text-center">Precio</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody id="contenedorCesta">
                            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)
                                <tr data-id="{{ $item->id }}">
                                    <td class="col-sm-9 col-md-6">
                                        <div class="media">
                                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">{{ $item->name }}</a></h4>
                                                <h5 class="media-heading">{{ $item->options['domain'] }}</h5>
                                            </div>
                                        </div></td>
                                    <td class="col-sm-1 col-md-1 text-center"><strong>{{ number_format($item->price,2,',','.') }} €</strong></td>
                                    <td class="col-sm-1 col-md-1">

                                        <button type="submit" class="btn btn-social-icon btn-danger" title="Eliminar">
                                            <i class="fa fa-trash"></i>
                                        </button>

                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>   </td>
                                <td><h5>Subtotal</h5></td>
                                <td id="subtotal" class="text-right"><h5><strong>{{ number_format(\Gloudemans\Shoppingcart\Facades\Cart::total(),2,',','.') }} €</strong></h5></td>
                            </tr>
                            <tr>
                                <td>   </td>
                                <td><h5>IVA</h5></td>
                                <td id="iva" class="text-right"><h5><strong>{{ number_format(\Gloudemans\Shoppingcart\Facades\Cart::total()*0.21,2,',','.') }} €</strong></h5></td>
                            </tr>
                            <tr>
                                <td>   </td>
                                <td><h3>Total</h3></td>
                                <td id="total" class="text-right"><h3><strong>{{ number_format(\Gloudemans\Shoppingcart\Facades\Cart::total()*1.21,2,',','.') }} €</strong></h3></td>
                            </tr>
                            <tr>
                                <td>   </td>
                                <td>
                                    <a class="btn btn-default" href="/">
                                        <span class="glyphicon glyphicon-shopping-cart"></span> Continuar Comprando
                                    </a></td>
                                <td>
                                    <a href="{{ URL::route('checkout') }}" class="btn btn-success">
                                        Procesar <span class="glyphicon glyphicon-play"></span>
                                    </a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    {!! Form::open(['route' => ['delete.item', ':USER_ID'], 'method' => 'DELETE', 'id' => 'myForm']) !!}
    {!! Form::close() !!}

    <!-- The popover content -->

    <div id="popover" style="display: none">
        <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
        <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
    </div>

@stop

@section('scripts')
    {!! Theme::script('js/ajax.js') !!}
@endsection