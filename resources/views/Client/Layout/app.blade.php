<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/assets/Clientfonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/assets/css/tiny-slider.css">
    <link rel="stylesheet" href="/assets/css/glightbox.min.css">
    <link rel="stylesheet" href="/assets/css/aos.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>{{ $title }}</title>
</head>

<body>
    <!-- header -->
    @include('Client.Layout.header')

    <!-- main  -->
    @yield('content')

    <!-- site-footer -->
    @include('Client.Layout.footer')
</body>

</html>