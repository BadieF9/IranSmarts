@extends('layouts.master')

@section('title', 'changing personal info')

@section('style')
    <link rel="stylesheet" href="/css/user/changing-data.css">
@endsection

@section('body')
    <!-- in this page you can add further info
        than your name and phone number you
        can also give adress(s) and other
        info that are used for sending
        products -->
    <!-- it is basically a form -->
    <!-- there is a bottun for submitting -->
    <div class="container">
        <h1>اطلاعات شخصی</h1>
        <form action="" method="POST">
            @csrf
            @method('put')
            <label for="fname">نام</label>
            <input type="text" id="fname">

            <label for="lname">نام خانوادگی</label>
            <input type="text" id="lname">


            <label for="number">شماره تماس</label>
            <input type="text" id="number">

            <label for="fixed-number">شماره تماس ثابت</label>
            <input type="text" id="fixed-number">

            <label for="email">ایمیل</label>
            <input type="text" id="email">

            <label for="code-1">کد پستی</label>
            <input type="text" id="code-1">

            <label for="province">استان</label>
            <select name="" id="province">
                <option value="isfihan">اصفهان</option>
                <option value="shiraz">فارس</option>
                <option value="tehran">تهران</option>
                <option value="khorasan">خراسان</option>
            </select>
            <label for="city">شهر</label>
            <select name="" id="city">
                <option value="isfihan">اصفهان</option>
                <option value="shiraz">شیراز</option>
                <option value="tehran">تهران</option>
                <option value="khorasan">مشهد</option>
            </select>
            <input type="submit" value="ذخیره">
        </form>
    </div>
@endsection
