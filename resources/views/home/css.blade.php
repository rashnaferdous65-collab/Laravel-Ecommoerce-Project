<head>
    @php
        $siteName = 'Giftos';
        $favicon = url('images/favicon.png');

        $stylesheets = [
            'owl' => 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css',
            'bootstrap' => url('css/bootstrap.css'),
            'main' => url('css/style.css'),
            'responsive' => url('css/responsive.css')
        ];
    @endphp

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="{{ $favicon }}" type="image/x-icon">

    <title>{{ $siteName }}</title>

    <!-- Slider Stylesheet -->
    <link rel="stylesheet" href="{{ $stylesheets['owl'] }}">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ $stylesheets['bootstrap'] }}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ $stylesheets['main'] }}">

    <!-- Responsive Styles -->
    <link rel="stylesheet" href="{{ $stylesheets['responsive'] }}">
</head>