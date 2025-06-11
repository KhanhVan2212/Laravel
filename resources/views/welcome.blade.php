<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NFT</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>

<body class="w-full  max-w-[1440px] mx-auto">
    <div class=" bg-[#F3ECF0] ">
        @include('partials.header')
        @include('partials.hero')
    </div>
    <img src="./images/bg1.png" alt="">

    @include('partials.sticker')
    <img class="mt-[50px]" src="./images/bg2.png" alt="">

    <div class="relative "> @include('partials.exclusive')</div>
    @include('partials.list')
    <img src="./images/bg22.png" alt="">
    <div class="relative "> @include('partials.overview')
    </div>

    @include('partials.benefit')

    @include('partials.sticker2')
    @include('partials.footer')
</body>

</html>
