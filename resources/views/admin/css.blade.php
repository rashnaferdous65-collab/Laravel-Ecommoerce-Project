```php
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <title>Dark Bootstrap Admin</title>
    <meta name="description" content="">

    {{-- Bootstrap --}}
    <link rel="stylesheet"
          href="{{ asset('admin_css/vendor/bootstrap/css/bootstrap.min.css') }}">

    {{-- Font Awesome --}}
    <link rel="stylesheet"
          href="{{ asset('admin_css/vendor/font-awesome/css/font-awesome.min.css') }}">

    {{-- Custom Font --}}
    <link rel="stylesheet"
          href="{{ asset('admin_css/css/font.css') }}">

    {{-- Google Font: Muli --}}
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Muli:300,400,700">

    {{-- Main Theme --}}
    <link rel="stylesheet"
          href="{{ asset('admin_css/css/style.default.css') }}"
          id="theme-stylesheet">

    {{-- Custom Styles --}}
    <link rel="stylesheet"
          href="{{ asset('admin_css/css/custom.css') }}">

    {{-- Favicon --}}
    <link rel="shortcut icon"
          href="{{ asset('admin_css/img/favicon.ico') }}">

    {{-- Support for older Internet Explorer versions --}}
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
```
