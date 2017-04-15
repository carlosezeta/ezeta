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
        <div class="col-md-9 blog-roll blog-list">
        <!-- Contenido Principal -->

            <div class="row blog-post">
                <div class="col-md-12">

                    <div class="visible-xs visible-sm">
                        <h4>Hosting seleccionado:</h4>
                        @include('partials.carrito-sidebar')
                    </div>

                    <h4>La cuenta de hosting ha de estar vinculada a un dominio principal. Seleccione la opción que desee:</h4>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::open() !!}

                            <input type="text" id="domainoption" name="domainoption" class="hidden" value="" />

                            <div class="tabbable tabs-left vertical-tabs">
                                <ul id="myTab2" class="nav nav-tabs nav-stacked col-sm-4 col-md-4">
                                    <li class="active"><a href="#vtab1" data-toggle="tab"  onclick="updateDomainValue('register');">Registrar</a></li>
                                    <li><a href="#vtab2" data-toggle="tab"  onclick="updateDomainValue('transfer');">Transferir</a></li>
                                    <li><a href="#vtab3" data-toggle="tab"  onclick="updateDomainValue('owndomain');">Autogestionar</a></li>
                                    <li><a href="#vtab4" data-toggle="tab"  onclick="updateDomainValue('subdomain');">Subdominio</a></li>
                                </ul>
                                <div id="myTab2Content" class="tab-content col-sm-8 col-md-8">
                                    <div class="tab-pane fade in active" id="vtab1">
                                        Seleccione esta opción si quiere registrar un nuevo dominio y vincularlo con su hosting. Introduzca el dominio que desea en la parte inferior y le mostraremos la disponibilidad y el precio.
                                    </div>
                                    <div class="tab-pane fade" id="vtab2">
                                        Quiero transferir un dominio desde otro registrador.
                                        <p class="help-block">Se ampliará la fecha de caducidad a partir de la fecha de vencimiento actual.</p>
                                    </div>
                                    <div class="tab-pane fade" id="vtab3">
                                        Modificaré un dominio existente o registraré uno nuevo con otro registrador.
                                        <p class="help-block">Le indicaremos cómo configurar las DNS de su dominio.</p>
                                    </div>
                                    <div class="tab-pane fade" id="vtab4">
                                        Quiero utilizar un sub-dominio <strong>GRATIS.</strong>
                                        <p class="help-block">Su web tendrá una dirección de la forma: suweb.ezetahosting.com.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div id="div-domain" class="col-md-7 se-mueve">
                                {!! Form::text('domain', $data['domain'], ['class' => 'form-control', 'placeholder' => 'Nombre de dominio']) !!}
                            </div>

                            <div id="div-tld" class="col-md-2 se-mueve">
                                <div class="input-group">
                                    <div class="input-group-addon">.</div>
                                    <!-- TODO: cuando cambiemos el input tld por un select, hay que fijarse de actualizar el javascript -->
                                    @if(!is_null($data['tld']))
                                        {!! Form::text('tld', $data['tld'], ['class' => 'form-control']) !!}
                                    @else
                                        {!! Form::text('tld', 'com', ['class' => 'form-control']) !!}
                                    @endif
                                </div>
                            </div>
                            <div id="boton-hosting-comprobar" class="col-md-3">
                                <a href="#" class="btn btn-primary btn-block" onclick="comprobarDominio();">
                                    <i class="glyphicon glyphicon-search"></i>
                                    <span style="display: inline; font-size: 1.2em;"> Comprobar</span>
                                </a>
                            </div>


                        </div>
                        <div class="row" id="loading-indicator" style="display: none;">
                            <div class="col-sm-12" style="text-align: center;">
                                <img src="{{ Theme::url('images/ajax-loader.gif') }}" />
                                <p>Comprobando disponibilidad...</p>
                            </div>
                        </div>
                        <div class="row" id="disponibilidad">
                            <div class="col-sm-12">
                                <div id="dominio-disponible" class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <h4>
                                        ¡Dominio disponible!
                                    </h4>
                                    El dominio está disponible. Regístralo cuanto antes para no perderlo.
                                </div>
                                <div id ="dominio-ocupado" class="alert alert-warning">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <h4>
                                        ¡Dominio ocupado!
                                    </h4>
                                    Inténtelo con otro dominio.
                                </div>
                                <div id ="dominio-error" class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <h4>
                                        Se ha producido un error.
                                    </h4>
                                    Tal vez se deba a un fallo puntual o a que no se ha sabido procesar la solicitud.
                                </div>
                            </div>
                        </div>

                        <div id="boton-hosting-continuar" class="form-group">
                            <div class="col-sm-offset-2 col-sm-8">
                                {!! Form::submit('Continuar', ['class' => 'btn btn-primary btn-large btn-block', 'style="margin-top: 15px;"']) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <div id="cart-sidebar" class="col-md-3 text-left hidden-sm">
        <!-- Sidebar -->
            @include('partials.carrito-sidebar')
        </div>
    </div>

    {!! Form::open(['route' => ['comprobar.dominio', ':DOMINIO'], 'method' => 'POST', 'id' => 'myForm']) !!}
    {!! Form::close() !!}

    <!-- The popover content -->

    <div id="popover" style="display: none">
        <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
        <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
    </div>

@stop

@section('scripts')
    @parent

    <script>
        $( document ).ready(function() {
            // Disable function
            jQuery.fn.extend({
                disable: function(state) {
                    return this.each(function() {
                        this.disabled = state;
                    });
                }
            });
        });

        function selectID(IDS) {
            var IDxx = document.getElementById(IDS);
            IDxx.checked = true;
        }

        $(function() {
            var offset = $("#cart-sidebar").offset();
            var topPadding = 280;
            $(window).scroll(function() {
                if ($("#cart-sidebar").height() < $(window).height()) { /* LINEA MODIFICADA POR ALEX PARA NO ANIMAR SI EL SIDEBAR ES MAYOR AL TAMANO DE PANTALLA */
                    $("#cart-sidebar").stop().animate({
                        marginTop: $(window).scrollTop() - offset.top + topPadding
                    });
                } else {
                    $("#cart-sidebar").stop().animate({
                        marginTop: 0
                    });
                }
            });
        });

        function updateDomainValue(val) {
            document.getElementById("domainoption").value = val;
            if (val == 'subdomain') {
                $( "#div-domain").removeClass("col-md-7 col-md-10").addClass("col-md-6");
                $( "#div-tld").removeClass("col-md-2").addClass("col-md-3");
                $( '#boton-hosting-comprobar').delay(400).show("fast");
                $('#boton-hosting-continuar').hide("slow");
                $( "input[name='tld']").attr("value", "ezetahosting.com").disable(true);
            } else {
                $('#dominio-disponible').hide("fast");
                $('#dominio-ocupado').hide("fast");
                $('#dominio-error').hide("fast");
                $( "#div-tld").removeClass("col-md-3").addClass("col-md-2");

                if (val == 'transfer' || val == 'owndomain') {
                    $( '#boton-hosting-comprobar').hide("fast");
                    $( "#div-domain").removeClass("col-md-6 col-md-7").addClass("col-md-10");
                    $('#boton-hosting-continuar').show("slow");
                } else {
                    $( "#div-domain").removeClass("col-md-6 col-md-10").addClass("col-md-7");
                    $( '#boton-hosting-comprobar').delay(400).show("fast");
                    $('#boton-hosting-continuar').hide("slow");
                }
                $( "input[name='tld']").attr("value", "com").disable(false);

            }
        }

        function comprobarDominio(){
            $('#dominio-disponible').hide("fast");
            $('#dominio-ocupado').hide("fast");
            $('#dominio-error').hide("fast");
            $('#boton-hosting-continuar').hide("slow");
            $('#loading-indicator').show("slow");
            var dominio = $("input[name='domain']").val() + "." + $("input[name='tld']").val();

            var form = $('#myForm');
            $.ajax({
                url: form.attr('action').replace(':DOMINIO', dominio),
                type: form.attr('method'),
                data: form.serialize(),
                dataType: 'html',
                success: function(result){
                    $('#loading-indicator').hide("slow");
                    var r = $.parseJSON(result);
                    if (r.disponible) {
                        $('#dominio-disponible').show("fast");
                        $('#boton-hosting-continuar').show("slow");
                    }
                    else {
                        $('#dominio-ocupado').show("fast");
                    }
                },
                error: function(data){
                    $('#loading-indicator').hide("slow");
                    $('#dominio-error').show("fast");
                }
            });
        }
    </script>
@show