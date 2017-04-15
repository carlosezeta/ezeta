@extends('layouts.master')

@section('title')
    Crear cuenta | @parent
@stop


@section('content')
    <h2 class="title-divider">
        <span>Inicio de sesión</span>
    </h2>
    <div class="row">
        <!--Blog Roll Content-->
        <div class="col-md-12">
            <!-- Blog post -->
            <div class="row blog-post">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="well">
                            <div class="modal-body">

                                {!! Form::open(['route' => 'login.post']) !!}
                                <div class="body bg-gray">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input type="email" name="email" class="form-control"
                                               placeholder="{{ trans('user::auth.email') }}" value="{{ Input::old('email')}}"/>
                                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input type="password" name="password"
                                               class="form-control" placeholder="Password"
                                               value="{{ Input::old('password')}}"/>
                                        {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="remember_me" id="remember_me"/>
                                        <label for="remember_me">{{ trans('user::auth.remember me') }}</label>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button type="submit" class="btn btn-primary btn-block">{{ trans('user::auth.login') }}</button>
                                </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <small><a href="{{URL::route('reset')}}">{{ trans('user::auth.forgot password') }}</a></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <p class="lead">Regístrese <span class="text-success">GRATIS</span></p>
                        <ul class="list-unstyled" style="line-height: 2">
                            <li><span class="fa fa-check text-success"></span> Vea sus pedidos</li>
                            <li><span class="fa fa-check text-success"></span> Guarde su cesta para más adelante</li>
                            <li><span class="fa fa-check text-success"></span> Compras más rápidas</li>
                            <li><a href="/read-more/"><u>Read more</u></a></li>
                        </ul>
                        <p><a href="/new-customer/" class="btn btn-info btn-block">Yes please, register now!</a></p>
                    </div>
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