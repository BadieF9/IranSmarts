@extends('layouts.master')

@section('title', 'landing page')

@section('style')
    <link rel="stylesheet" href="/css/user/landing-page.css">
@endsection

@section('body')
    <!-- this page will show the users info -->
    <!-- now we just stick with the really needed ones -->
    <!-- some other things will be added along the way -->
    <div class="container">
        <section id="info">
            <h1>
                اطلاعات:
            </h1>
            <table>
                <tr>
                    <th>نام</th>
                    <td>ممد</td>
                </tr>
                <tr>
                    <th>نام خانوادگی</th>
                    <td>ممد</td>
                </tr>
                <tr>
                    <th>ایمیل</th>
                    <td>ممد@ممد.ممد</td>
                </tr>
                <tr>
                    <th>شماره تماس</th>
                    <td>ممد</td>
                </tr>
                <tr>
                    <th>استان</th>
                    <td>مممد </td>
                </tr>
                <tr>
                    <th>کدپستی</th>
                    <td>ممد</td>
                </tr>
                <tr>
                    <th>آدرس</th>
                    <td>ممد</td>
                </tr>
                <tr>
                    <th>آدرس2 </th>
                    <td>ممد</td>
                </tr>
            </table>
        </section>
        <section id="orders-list">
            <h1>
                آخرین سفارسات:
            </h1>
            <section class="card">
                <button class="add">اضافه کردن به سبد خرید</button>
                <button title="حذف" class="delete">X</button>
                <img src="/img/user/thumb.png" alt="پکیج دوربین داهوا">
                <h1>پکیج دوربین داهوا</h1>
                <a href="#">مشاهده کالا</a>
                <span>2500000</span>
            </section>
        </section>

    </div>
@endsection
