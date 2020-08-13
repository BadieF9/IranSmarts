@extends('layouts.master')

@section('title', 'faivorites')

@section('style')
    <link rel="stylesheet" href="/css/user/faivorites.css">
@endsection

@section('body')
    <!-- same structure as the cart the only
        diffrence is that in here you can
        save the cards that you liked
        adding this to your cart you have to
        push the button to add it -->
    <div class="container">
        @foreach($favorites as $favorite)
            <section class="card">
                <button class="add">اضافه کردن به سبد خرید</button>
                <button title="حذف" class="delete">X</button>
                <img src="/img/user/thumb.png" alt="پکیج دوربین داهوا">
                <h1>پکیج دوربین داهوا</h1>
                <a href="#">مشاهده کالا</a>
                <span>2500000</span>
            </section>
        @endforeach
    </div>
@endsection
