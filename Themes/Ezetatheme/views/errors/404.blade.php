@extends('layouts.master')

@section('title')
    404 - Página no encontrada | @parent
@stop

@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="row-90">
                <h2 class="error-code font-xs-x7 font-md-x10">
                    404 <i class="fa fa-file-text primary-colour font-xs-x6 font-md-x10"></i>
                </h2>
                <h2 class="error-message font-xs-x2 font-md-x2">
                    Ups, Esa página no se encuentra.
                </h2>
                <p class="error-details font-xs-x1">Es probable que haya seguido un enlace desactualizado, que la página que busca se haya movido o incluso que ya no exista. Puede intentar encontrar lo que busca navegando por la web o utilizando el buscador.</p>
            </div>
        </div>
        <div class="col-md-4">
            <h4>
                Tal vez buscaba:
            </h4>
            <ul class="list-lg">
                <li><i class="fa fa-fw fa-angle-right"></i> <a href="{{ URL::to('/') }}">Inicio</a></li>
                <li><i class="fa fa-fw fa-angle-right"></i> <a href="{{ URL::to('/hosting') }}">Hosting</a></li>
                <li><i class="fa fa-fw fa-angle-right"></i> <a href="#">Dominios</a></li>
                <li><i class="fa fa-fw fa-angle-right"></i> <a href="#">Software de gestión PYME</a></li>
            </ul>
            <form class="error-search margin-top-md">
                <h4>
                    O intente buscarlo:
                </h4>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar en la web">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Buscar</button>
            </span>
                </div>
            </form>
        </div>
    </div>

@stop
