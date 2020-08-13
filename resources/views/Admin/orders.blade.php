@extends('Admin.layouts.master')
@section('title', 'orders')
@section('style')
    <link rel="stylesheet" href="/css/orders.css">
@endsection

@section('body')

    <x-sidebar/>

    <div class="container">
        <div class="container">
            <section>
                <h1>سفارشات تازه</h1>
                <table>
                    <tr>
                        <th> کالا</th>
                        <th> تعداد</th>
                        <th> موجودی</th>
                    </tr>
                    <tr>
                        <td><a href="../html/orders-info.html">دوربین داهوا 2مگاپیکسل</a> </td>
                        <td><a href="../html/orders-info.html">30</a> </td>
                        <td><a href="../html/orders-info.html">25</a> </td>
                    </tr>
                    <tr>
                        <td><a href="../html/orders-info.html">مرکزی اعلام حریق</a> </td>
                        <td><a href="../html/orders-info.html">1</a> </td>
                        <td><a href="../html/orders-info.html">90</a> </td>
                    </tr>
                </table>
            </section>
            <section>
                <h1>سفارشات بسته شده</h1>
                <table>
                    <tr>
                        <th>کالا </th>
                        <th>تعداد </th>
                        <th>موجودی </th>
                    </tr>
                    <tr>
                        <td><a href="../html/orders-info.html">دوربین داهوا 2مگاپیکسل</a> </td>
                        <td><a href="../html/orders-info.html">30</a> </td>
                        <td><a href="../html/orders-info.html">25</a> </td>
                    </tr>
                    <tr>
                        <td><a href="../html/orders-info.html">مرکزی اعلام حریق</a> </td>
                        <td><a href="../html/orders-info.html">1</a> </td>
                        <td><a href="../html/orders-info.html">90</a> </td>
                    </tr>
                </table>
            </section>
        </div>
@endsection
