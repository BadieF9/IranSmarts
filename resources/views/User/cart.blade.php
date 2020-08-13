@extends('layouts.master')

@section('title', 'cart')

@section('style')
    <link rel="stylesheet" href="/css/cart.css">
@endsection

@section('body')
    <!-- its going to have the similar cart structure
        same as the products and same as faivorite -->
    <!-- you can delete items -->
    <!-- see prices -->
    <!-- delete items with the X mark -->
    <!-- see all the prices add up -->
    <!-- finalize your order -->
    <div class="container">
        <section class="card">
            <button title="حذف">X</button>
            <img src="/img/user/thumb.png" alt="پکیج دوربین داهوا">
            <h1>پکیج دوربین داهوا</h1>
            <a href="#">مشاهده کالا</a>
            <span>2500000</span>
        </section>
        <section class="card">
            <button title="حذف">X</button>
            <img src="/img/user/thumb.png" alt="پکیج دوربین داهوا">
            <h1>پکیج دوربین داهوا</h1>
            <a href="#">مشاهده کالا</a>
            <span>2500000</span>
        </section>
        <section class="card">
            <button title="حذف">X</button>
            <img src="/img/user/thumb.png" alt="پکیج دوربین داهوا">
            <h1>پکیج دوربین داهوا</h1>
            <a href="#">مشاهده کالا</a>
            <span>2500000</span>
        </section>
        <footer class="price-adder">
            <table>
                <tr>
                    <th>
                        قیمت کل :
                    </th>
                    <td>
                        1000000
                    </td>
                </tr>
            </table>
            <a href="../html/finalazing-order.html">نهایی کردن خرید</a>
        </footer>
    </div>
@endsection
