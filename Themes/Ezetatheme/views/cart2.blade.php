@extends('layouts.master')

@section('title')
    Adquiere {{ $hosting->name }} | @parent
@stop

@section('content')
    <h2 class="title-divider">
        <span>Contratar <span class="de-em">{{ $hosting->name }}</span></span>
        <small>{!! $hosting->description !!}</small>
    </h2>
    <div class="row">
        <!--Blog Roll Content-->
        <div class="col-md-9 blog-roll blog-list">
            <!-- Blog post -->
            <div class="row blog-post">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Producto</th>
                            <th class="text-center">Precio</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)
                        <tr>
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
                                <button type="button" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span> Eliminar
                                </button></td>
                        </tr>
                        @endforeach
                        <tr>
                            <td>   </td>
                            <td><h5>Subtotal</h5></td>
                            <td class="text-right"><h5><strong>{{ number_format(\Gloudemans\Shoppingcart\Facades\Cart::total(),2,',','.') }}</strong></h5></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td><h5>IVA</h5></td>
                            <td class="text-right"><h5><strong>{{ number_format(\Gloudemans\Shoppingcart\Facades\Cart::total()*0.21,2,',','.') }}</strong></h5></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td><h3>Total</h3></td>
                            <td class="text-right"><h3><strong>{{ number_format(\Gloudemans\Shoppingcart\Facades\Cart::total()*1.21,2,',','.') }}</strong></h3></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>
                                <button type="button" class="btn btn-default">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Continuar Comprando
                                </button></td>
                            <td>
                                <button type="button" class="btn btn-success">
                                    Procesar <span class="glyphicon glyphicon-play"></span>
                                </button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3 text-left">
            Features...
        </div>

    </div>

    <!-- The popover content -->

    <div id="popover" style="display: none">
        <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
        <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
    </div>

@stop
