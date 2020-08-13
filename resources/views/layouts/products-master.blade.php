<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/preset/preset.css">
    <link rel="stylesheet" href="/css/main/header-and-footer/header-and-footer.css">
    <link rel="stylesheet" href="/css/main/info-products.css">
    @yield('style')
</head>
<body>
<!-- here are the header and footer of
    the website-->
<x-header/>


<!-- this is the page that will be shown when you have
    clicked on a card -->
<!-- it has three things on it's buttom that are now in
    different html files but they eill be connected
    in one later with js
    -->

<section class="slideshow">
    <h1>{{ $products->name }}</h1>
    <div class="image_part">
        <button> < </button>
        <img src="/img/thumb.png" alt="">
        <button> > </button>
    </div>
</section>
<section class="buttons">
    <a href="info-products-explaination.html">توضیحات</a>
    <a href="info-products-technical-info.html">مشخصات فنی</a>
    <a href="info-products-reviews.html">نظر کاربران</a>
</section>

@yield('body')
<x-footer/>
</body>
</html>
