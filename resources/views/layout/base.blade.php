<!doctype html>
<html lang="{{ str_replace('_', '-', $config->local) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="{{ $config->debug ? 'nofollow' : 'index,follow' }}">

    <meta name="description" content="{{ $config->site['description'] }}">
    <meta name="subject" content="{{ $config->site['slogan'] }}">
    <meta name="copyright" content="{{ $config->company['name'] }}">
    <meta name="author" content="{{ $config->contact['name'] }}, {{ $config->contact['mail'] }}">
    <meta name="designer" content="{{ $config->site['designer'] }}">
    <meta name="contact" content="{{ $config->company['name'] }}">
    <meta name="url" content="{{ $config->site['url'] }}">

    <meta name="og:url" content="{{ $config->site['url'] }}">
    <meta name="og:image" content="{{ $config->site['url'] }}/img/{{ $config->site['social_img_name'] }}-1600x900.png">
    <meta name="og:site_name" content="{{ $config->company['name'] }}">
    <meta name="og:description" content="{{ $config->site['description'] }}">
    <meta property="og:locale" content="{{ $config->local }}" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:creator" content="{{ $config->company['name'] }}">
    <meta name="twitter:url" content="{{ $config->site['url'] }}">
    <meta name="twitter:title" content="{{ $config->site['slogan'] }}">
    <meta name="twitter:description" content="{{ $config->site['description'] }}">
    <meta name="twitter:image" content="{{ $config->site['url'] }}/img/{{ $config->site['social_img_name'] }}-1200x630.png">
    <meta name="twitter:image:alt" content="{{ $config->company['name'] }}">

    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicons/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="./img/favicons/favicon.ico">

    {!! $app->viteAssets('resources/js/app.js', true) !!}

    <title>{{ $config->company['name'] }} | Présentation</title>

</head>
<body>

@include('common.header', ['slogan' => $config->site['slogan']])

@yield('content')

@include('common.footer', ['config' => $config])

</body>
</html>
