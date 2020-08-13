@extends('layouts.master')

@section('title', 'finalazing order')

@section('style')
    <link rel="stylesheet" href="/css/user/finalazing-order.css">
@endsection

@section('body')
    <!--this page is actually a read only page that
        shows the customer the info before payment
        so it can be reviewd -->
    <!-- you will be redirected to this page only
         if you have completed all the info
        needed in order to get the product -->
    <!-- if you havent a alaret will be fired and
        you will be redirected to the changing data
        page -->
    <div class="container">
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
                <th>شماره تماس</th>
                <td>09564985326</td>
            </tr>
            <tr>
                <th>شماره تماس ثابت</th>
                <td>02125165</td>
            </tr>
        </table>

        <form action="" method="post">
            @csrf
            <label for="adress">انتخاب آدرس</label>
            <select name="adress" id="adress">
                <option value="home">
                    خانه
                    ممدستان، کوچه ممد دس
                </option>
                <option value="home">
                    سرکار
                    ممدستان، کوچه ممد دس
                </option>
            </select>
        </form>
        <a href="../html/changing-data.html">تغیر اطلاعات</a>
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
            <a href="#">پرداخت</a>
        </footer>
    </div>
@endsection
