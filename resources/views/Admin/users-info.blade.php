@extends('Admin.layouts.master')
@section('title', 'user info')
@section('style')
    <link rel="stylesheet" href="/css/admin/user-info.css">
@endsection

@section('body')

    <x-sidebar/>

    <div class="container">
        <h1>{{ $name }}</h1>
        <!-- here is a table showing the info
            about the user -->
        <div class="table-container">
            <table>
                <tr>
                    <th>عنوان</th>
                    <th>تعداد</th>
                </tr>
                <tr>
                    <td>کالا اضافه شده</td>
                    <td>233</td>
                </tr>
                <tr>
                    <td>سفارشات پیگیری شده</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>خرید</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>ادیت</td>
                    <td>25665</td>
                </tr>
            </table>
        </div>
        <!-- here there is a form in witch you can choose the
            the role of the user -->
        <!--
          the option must be fixed on the users corrent role
         -->
        <form action="">
            <label for="position">انتخاب نقش</label>
            <select id="position">
                <option value="customer">مشتری</option>
                <option value="sender">مسئول حمل و نقل</option>
                <option value="editor">انباردار</option>
                <option value="maneger">مدیر</option>
            </select>
            <input type="submit" value="ذخیره" id="submit">
            <label for="submit"></label>
        </form>
    </div>
@endsection
