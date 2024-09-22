<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ !empty($meta_title) ? $meta_title : '' }} - Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/preloader.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/circle.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/fm.revealator.jquery.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="{{ asset('public/css/skins/yellow.css') }}" rel="stylesheet">

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{ asset('public/css/skins/blue.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="{{ asset('public/css/skins/green.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{ asset('public/css/skins/yellow.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="{{ asset('public/css/skins/blueviolet.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{ asset('public/css/skins/goldenrod.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{ asset('public/css/skins/magenta.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="{{ asset('public/css/skins/orange.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="{{ asset('public/css/skins/purple.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="{{ asset('public/css/skins/red.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{ asset('public/css/skins/yellowgreen.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/styleswitcher.css') }}" />

    <!-- Modernizr JS File -->
    <script src="{{ asset('public/js/modernizr.custom.js') }}"></script>
</head>

<body class="{!! !empty($className) ? $className : '' !!}">

    @include('layouts._sidebar')

    @yield('content')

<!-- Template JS Files -->
<script src="{{ asset('public/js/jquery-3.5.0.min.js') }}"></script>
<script src="{{ asset('public/js/styleswitcher.js') }}"></script>
<script src="{{ asset('public/js/preloader.min.js') }}"></script>
<script src="{{ asset('public/js/fm.revealator.jquery.min.js') }}"></script>
<script src="{{ asset('public/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('public/js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('public/js/classie.js') }}"></script>
<script src="{{ asset('public/js/cbpGridGallery.js') }}"></script>
<script src="{{ asset('public/js/jquery.hoverdir.js') }}"></script>
<script src="{{ asset('public/js/popper.min.js') }}"></script>
<script src="{{ asset('public/js/bootstrap.js') }}"></script>
<script src="{{ asset('public/js/custom.js') }}"></script>

</body>

</html>