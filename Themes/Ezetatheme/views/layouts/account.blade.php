<!DOCTYPE html>
<html lang="{{ LaravelLocalization::setLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="{{ Setting::get('core::site-description') }}" />
        <meta name="author" content="carlosezeta">
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title'){{ Setting::get('core::site-name') }}@show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    {!! Theme::style('css/bootstrap.min.css') !!}

            <!-- Font Awesome -->
    {!! Theme::style('css/font-awesome.min.css') !!}

            <!-- Plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 -->
    <!-- Plugin: animate.css (animated effects) - http://daneden.github.io/animate.css/ -->
    {!! Theme::style('plugins/animate/animate.css') !!}
            <!-- @LINEBREAK -- <!-- Plugin: flag icons - http://lipis.github.io/flag-icon-css/ -->
    {!! Theme::style('plugins/flag-icon-css/css/flag-icon.min.css') !!}

            <!-- Theme style -->
    {!! Theme::style('css/theme-style.css') !!}

            <!--Your custom colour override-->
    {!! Theme::style('css/colour-red.css') !!}

            <!-- Your custom override -->
    {!! Theme::style('css/custom-style.css') !!}

            <!-- HTML5 shiv & respond.js for IE6-8 support of HTML5 elements & media queries -->
    <!--[if lt IE 9]>
    {!! Theme::script('plugins/html5shiv/dist/html5shiv.js') !!}
    {!! Theme::script('plugins/respond/respond.min.js') !!}
    <![endif]-->

    <!-- Le fav and touch icons - @todo: fill with your icons or remove -->
    <link rel="shortcut icon" href="{{ Theme::url('img/icons/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ Theme::url('img/icons/114x114.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ Theme::url('img/icons/72x72.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ Theme::url('img/icons/default.png') }}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rambla' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>

    <!--Plugin: Retina.js (high def image replacement) - @see: http://retinajs.com/-->
    {!! Theme::script('plugins/retina/dist/retina.min.js') !!}

    {!! Theme::style('css/main.css') !!}
</head>

<!-- ======== @Region: body ======== -->
<body class="@yield('body-class')">
<a href="#content" class="sr-only">Ir al contenido</a>
@include('partials.navigation')

@section('highlighted')
@show

        <!-- ======== @Region: #content ======== -->
<div id="content">
    <div class="container">
        @yield('content')
    </div>
</div>

@include('partials.contentbelow')

@include('partials.footer')


        <!--Scripts -->
{!! Theme::script('js/jquery.min.js') !!}

        <!-- Bootstrap JS -->
{!! Theme::script('js/bootstrap.min.js') !!}


        <!-- JS plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 -->

<!--Custom scripts mainly used to trigger libraries/plugins -->
{!! Theme::script('js/script.min.js') !!}

@yield('scripts')

<?php if (Setting::has('core::google-analytics')): ?>
{!! Setting::get('core::google-analytics') !!}
<?php endif; ?>
</body>
</html>