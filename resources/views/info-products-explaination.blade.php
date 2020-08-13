@extends('layouts.products-master')

@section('title', 'Document')

@section('style')
    <link rel="stylesheet" href="/css/main/info-products-explaination.css">
    <link rel="stylesheet" href="/css/main/info-products.css">
@endsection

@section('body')

    <!-- this is an extention that will be added
        on the buttom of info product -->
    <section>
        <h1>
            توضیحات:
        </h1>
        <div class="review">
            <p>{{ $products->description }}</p>

        </div>
    </section>
@endsection
