<!-- ======== @Region: #navigation ======== -->
<div id="navigation" class="wrapper">
    <div class="navbar-static-top">

        <!--Hidden Header Region-->
        <div class="header-hidden">
            <div class="header-hidden-inner container">
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <h3>
                            About Us
                        </h3>
                        <p>Making the web a prettier place one template at a time! We make beautiful, quality, responsive Drupal & web templates!</p>
                        <a href="about.htm" class="btn btn-sm btn-primary">Find out more</a>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <!--@todo: replace with company contact details-->
                        <h3>
                            Contact Us
                        </h3>
                        <address>
                            <p>
                                <abbr title="Phone"><i class="fa fa-phone"></i></abbr>
                                019223 8092344
                            </p>
                            <p>
                                <abbr title="Email"><i class="fa fa-envelope"></i></abbr>
                                info@themelize.me
                            </p>
                            <p>
                                <abbr title="Address"><i class="fa fa-home"></i></abbr>
                                Sunshine House, Sunville. SUN12 8LU.
                            </p>
                        </address>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <!--Colour Switch for demo - @todo: remove in production-->
                        <div class="colour-switcher">
                            <h3>
                                Theme Colours
                            </h3>
                            <a href="#green" class="green active" data-toggle="tooltip" data-placement="bottom" data-original-title="Green (Default)">Green</a> <a href="#red" class="red" data-toggle="tooltip" data-placement="bottom" data-original-title="Red">Red</a> <a href="#blue" class="blue" data-toggle="tooltip" data-placement="bottom" data-original-title="Blue">Blue</a>
                            <p>Cookies are NOT enabled so colour selection is not persistent.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Header upper region-->
        <div class="header-upper">
            <div class="header-upper-inner container">
                <div class="row">
                    <div class="col-xs-7 col-xs-push-5">

                        <!--Show/hide trigger for #hidden-header -->
                        <!--
                        <div id="header-hidden-link">
                            <a href="#" title="Click me you'll get a surprise" class="show-hide" data-toggle="show-hide" data-target=".header-hidden" data-callback="searchFormFocus"><i></i>Open</a>
                        </div>
                        -->

                        <!--social media icons-->
                        <!-- <div class="social-media"> -->
                            <!--@todo: replace with company social media details-->
                        <!--
                            <a href="#"> <i class="fa fa-twitter-square"></i> </a>
                            <a href="#"> <i class="fa fa-facebook-square"></i> </a>
                            <a href="#"> <i class="fa fa-linkedin-square"></i> </a>
                            <a href="#"> <i class="fa fa-google-plus-square"></i> </a>
                        </div>
                        -->
                        <ul class="social-media">
                            @if(!$currentUser)
                                @if (\Gloudemans\Shoppingcart\Facades\Cart::count() > 0)
                                    <li id="carrito">
                                        <a href="/shop/carro"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                @endif
                            @else
                                <?php $cart = \Modules\Shop\Entities\Carro::where('user_id','=',$currentUser->id)->first(); ?>
                                @if (!empty($cart))
                                    <li id="carrito">
                                        <a href="/shop/carro"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                @endif
                            @endif

                        @if ($currentUser)
                            <!-- TODO: Aquí tendría que haber un desplegable con opciones de Perfil, Salir,... -->
                            <li><a href="{{ URL::route('logout') }}" alt="Cerrar sesión"><i class="fa fa-user"></i></a></li>
                        @endif
                        </ul>
                    </div>

                    <div class="col-xs-5 col-xs-pull-7">

                        <!--user menu-->
                        <div class="btn-group user-menu">
                            <a href="{{ URL::to('/auth/login') }}" class="btn btn-link login-mobile"><i class="fa fa-user"></i></a>

                            @if ($currentUser)
                                Hola {!! $currentUser->first_name !!}
                            @else
                                <a href="#signup-modal" class="btn btn-link signup" data-toggle="modal">Registrarse</a>
                                </li>
                                <a href="#login-modal" class="btn btn-link login" data-toggle="modal">Entrar</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Header search region - hidden by default -->
        <div class="header-search">
            <form class="search-form container">
                <input type="text" name="search" class="form-control search" value="" placeholder="Buscar">
                <button type="button" class="btn btn-link"><span class="sr-only">Search </span><i class="fa fa-search fa-flip-horizontal search-icon"></i></button>
                <button type="button" class="btn btn-link close-btn" data-toggle="search-form-close"><span class="sr-only">Close </span><i class="fa fa-times search-icon"></i></button>
            </form>
        </div>

        <!--Header & Branding region-->
        <div class="header" data-toggle="clingify">
            <div class="header-inner container">
                <li class="navbar">
                    <div class="pull-left">
                        <!--branding/logo-->
                        <a class="navbar-brand" href="{{ URL::to('/') }}" title="Home">
                            <h1>
                                <span>ezeta</span>hosting<span>.</span>
                            </h1>
                        </a>
                        <div class="slogan">Soluciones web para PYMEs</div>
                    </div>

                    <!--Search trigger -->
                    <a href="#search" class="search-form-tigger" data-toggle="search-form" data-target=".header-search">
                        </span>
                        <i class="fa fa-search fa-flip-horizontal search-icon"></i>
                    </a>

                    <!-- mobile collapse menu button - data-toggle="toggle" = default BS menu - data-toggle="jpanel-menu" = jPanel Menu -->
                    <a href="#top" class="navbar-btn" data-toggle="jpanel-menu" data-target=".navbar-collapse" data-direction="right"><i class="fa fa-bars"></i></a>

                    <!--everything within this div is collapsed on mobile-->
                    <div class="navbar-collapse collapse">
                        <!--main navigation-->
                        <ul class="nav navbar-nav">
                            <li class="home-link">
                                <a href="{{ URL::to('/') }}"><i class="fa fa-home"></i><span class="hidden">Inicio</span></a>
                            </li>

                            <li class="dropdown dropdown-full">
                                <a href="/hosting" class="dropdown-toggle menu-item" id="megamenu-drop" data-toggle="dropdown" data-hover="dropdown">Hosting SSD</a>
                                <!-- Dropdown Menu - Mega Menu -->
                                <ul class="dropdown-menu mega-menu" role="menu" aria-labelledby="megamenu-drop">
                                    <li role="presentation" class="dropdown-header">Alojamiento web en España. Servidores Linux con discos SSD.</li>
                                    <li role="presentation">
                                        <!-- TODO: Hay que ver cómo arreglar el menú en versión móvil -->
                                        <!-- Seguramente habrá que cambiar en el <ul class="row list-unstyled"> -->
                                        <!-- Las clases de la tabla de precios y meterlas dentro en un div o algo -->
                                        <ul class="row list-unstyled pricing-stack pricing-stack-overlaping margin-top-lg" role="menu">
                                            <!-- TODO: Quitar de aquí la llamada a Productos y asegurarse de que se pasa a todas las vistas -->
                                            <?php if (!isset($productos)) { $productos = \Modules\HostingModule\Entities\Producto::all(); } ?>
                                            @foreach($productos as $producto)
                                            <li class="col-md-3" role="presentation">
                                                <div class="well{{ ($producto->id==2) ? ' active' : '' }}">
                                                    <h3 class="title">{{ $producto->name }}</h3>
                                                    <p class="price">
                                                        <span class="digits">{{ (int)$producto->price }}</span>,{{ ($producto->price-(int)$producto->price)*100 }}
                                                        <span class="term">€/mes</span>
                                                    </p>
                                                    <ul class="unstyled points">
                                                        <li>
                                                            @if ($producto->disklimit == -1)
                                                                Espacio en <strong>disco SSD</strong> <strong>ILIMITADO</strong>
                                                            @elseif ($producto->disklimit >= 1024)
                                                                <strong>{{ round($producto->disklimit/1024) }} GB</strong> de espacio en <strong>disco SSD</strong>
                                                            @else
                                                                <strong>{{ $producto->disklimit }} MB</strong> de espacio en <strong>disco SSD</strong>
                                                            @endif
                                                        </li>
                                                        <li>
                                                            @if ($producto->bwlimit == -1)
                                                                Transferencia <strong>ILIMITADA</strong>
                                                            @elseif ($producto->bwlimit >= 1024)
                                                                <strong>{{ round($producto->bwlimit/1024) }} GB</strong> de <strong>Transferencia</strong>
                                                            @else
                                                                <strong>{{ $producto->bwlimit }} MB</strong> de <strong>Transferencia</strong>
                                                            @endif
                                                        </li>
                                                        <li>
                                                            @if ($producto->mysqldatabases == -1)
                                                                <strong>Ilimitadas</strong> Bases de Datos <strong>MySQL</strong>
                                                            @elseif($producto->mysqldatabases == 1)
                                                                <strong>1</strong> Base de Datos <strong>MySQL</strong>
                                                            @else
                                                                <strong>{{ $producto->mysqldatabases }}</strong> Bases de Datos <strong>MySQL</strong>
                                                            @endif
                                                        </li>
                                                        <li>
                                                            @if ($producto->ftpaccounts == -1)
                                                                <strong>Ilimitadas</strong> Cuentas <strong>FTP</strong>
                                                            @elseif($producto->ftpaccounts == 1)
                                                                <strong>1</strong> Cuenta <strong>FTP</strong>
                                                            @else
                                                                <strong>{{ $producto->ftpaccounts }}</strong> Cuentas <strong>FTP</strong>
                                                            @endif
                                                        </li>
                                                        <li>
                                                            @if ($producto->emailaccounts == -1)
                                                                <strong>Ilimitadas</strong> Cuentas de <strong>Correo</strong>
                                                            @elseif($producto->emailaccounts == 1)
                                                                <strong>1</strong> Cuenta de <strong>Correo electrónico</strong>
                                                            @else
                                                                <strong>{{ $producto->emailaccounts }}</strong> Cuentas de <strong>Correo electrónico</strong>
                                                            @endif
                                                        </li>
                                                    </ul>
                                                    <a role="menuitem" class="btn btn-primary" href="/shop/hosting/{{ $producto->id }}">Contratar</a>
                                                </div>
                                            </li>
                                            @endforeach

                                            <li class="col-md-3" role="presentation">
                                                <a role="menuitem" href="features.htm" class="img-link">
                                                    {!! Theme::image('img/features/feature-4.png') !!}
                                                </a>
                                                <a role="menuitem" href="features.htm" tabindex="-1" class="menu-item"><strong>Upgrade Assistance</strong></a>
                                                <span>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio!</span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="/dominios" class="dropdown-toggle" data-hover="dropdown">Dominios</a></li>

                        </ul>
                    </div>
                    <!--/.navbar-collapse -->
                </div>
            </div>
        </div>
    </div>
</div>