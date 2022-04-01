<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta name="theme-color" content="#009ee3" />
    <meta name="description" content="Famous" />

    {{-- Meta Tags --}}
    <meta property="og:title" content="Famous" />
    <meta property="og:description" content="Famous" />
    <meta property="og:url" content="https://tingprojects.in/projects/famous/" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://tingprojects.in/projects/famous/img/og-image.jpg" />
    <meta property="og:image:secure_url" content="https://tingprojects.in/projects/famous/img/og-image.jpg" />

    <base href="{{ env('APP_URL') }}">

    {{-- <title>@yield('title')</title> --}}
    <title>Famous</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
    <link rel="stylesheet" href="dist/css/app.min.css" />
    @stack('styles')

</head>

<body>
    @yield('content')
    <script src="dist/js/app.min.js"></script>
    @stack('scripts')
</body>

</html>
