<!DOCTYPE html>
<html lang="en">
<head>
    @section('meta')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Aidhan Dossel">
        <meta name="description" content="@yield('description')">

        <meta property="og:site_name" content="Aidhan Dossel">
        <meta property="og:title" content="@yield('title')">
        <meta property="og:description" content="@yield('description')">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ app('request')->url() }}">

        <meta property="og:locale" content="en_AU">
        <meta property="og:locale:alternate" content="en_GB">
        <meta property="og:locale:alternate" content="en_US">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@ukn0meh">
        <meta name="twitter:title" content="@yield('title')">
        <meta name="twitter:description" content="@yield('description')">
    @show

    <title>@yield('title') | Aidhan Dossel</title>

    @section('styles')
        <link rel="stylesheet" href="/assets/css/dist/normalize.css">

        <link rel="stylesheet" href="/assets/css/base.css">
        <link rel="stylesheet" href="/assets/css/app.css">

        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway:800,900%7COpen+Sans:300">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500%7CInconsolata:400,700">

        <link rel="stylesheet" href="/assets/css/dist/fontawesome.css">
        <link rel="stylesheet" href="/assets/css/dist/dracula.css">
    @show
</head>
<body>
@include('layouts.partials.header')

<main id="page-body">
    <div class="container">
        <header id="page-header">
            <h2>@yield('title')</h2>

            @yield('post-info')
        </header>
        <div id="page-content">
            @yield('content')
        </div>
        @yield('comments')
    </div>
</main>

@include('layouts.partials.footer')

<script src="/assets/js/app.js"></script>
</body>
</html>