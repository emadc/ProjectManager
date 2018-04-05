<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Plateforme de microblogging">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="screen" title="no title">
    <title>Projets | @yield('title')</title>
</head>
<body style="padding-top: 8rem;">
    <!-- Main navigation -->
    @include('partials/_nav')
    @yield('content')
</body>
</html>

