@extends('layouts.master')

@section('title', 'Document')

@section('style')
    <link rel="stylesheet" href="/css/main/list-products.css">
@endsection

@section('body')
    <section class="card_holder">
        <h1>دوریبین</h1>
        <div class="products_container">
            @foreach($products as $product)
                <section class="card">
                    <button class="add">اضافه کردن به سبد خرید</button>
                    <img src="/img/thumb.png" alt="پکیج دوربین داهوا">
                    <h1>{{ $product->name }}</h1>
                    <a href="{{ $product->path() }}">مشاهده کالا</a>
                    <span>{{ $product->price }}</span>
                </section>
            @endforeach
        </div>
    </section>
    <div class="asides">
        <aside class="aside_price">
            <h2>قیمت</h2>
            <form action="" method="post" id="main-form">
                <div>
                    <label for="one-million">زیر 1 میلیون</label>
                    <input type="radio" id="one-million" name="price" value="under-one-million">
                </div>
                <div>
                    <label for="five-million">زیر 5 میلیون</label>
                    <input type="radio" id="five-million" name="price" value="under-five-million">
                </div>
                <div>
                    <label for="ten-million">زیر 1 میلیون</label>
                    <input type="radio" id="ten-million" name="price" value="under-ten-million">
                </div>
                <div>
                    <label for="fifteen-million">زیر 5 میلیون</label>
                    <input type="radio" id="fifteen-million" name="price" value="under-five-million">
                </div>

            </form>
        </aside>
        <aside class="aside_brand">
            <h2>برند</h2>
            <div class="rest_of_form">
                <div>
                    <label for="dahua">داهوا</label>
                    <input type="radio" id="dahua" name="brand" value="dahua" form="main-form">
                </div>
                <div>
                    <label for="hike-vision">هایک ویژن</label>
                    <input type="radio" id="hike-vision" name="brand" value="hike vision" form="main-form">
                </div>
                <input type="submit" form="main-form" value="جست و جو">
            </div>
        </aside>
    </div>
@endsection
