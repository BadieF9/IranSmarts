@extends('Admin.layouts.master')
@section('title', 'landing page')
@section('style')
    <link rel="stylesheet" href="/css/landing-page.css">
@endsection

@section('body')

    <x-sidebar/>

    <!-- landing page consists of four parts
      latest sales: it is the latest sales witch were closed
      sales graph:  it is graph that shows the sales quantity on the time
      to do list: a to do list.
      latest oeders: the orders wich are not yet closed -->

    <!-- the rest is just a table element -->
    <div class="container">
        <section id="latest-sales">
            <h1>آخرین فروش ها</h1>
            <table>
                <tr>
                    <th>کالا</th>
                    <th>تعداد</th>
                    <th>موجودی</th>
                </tr>
                <tr>
                    <td>دوربین داهوا 2مگاپیکسل</td>
                    <td>30</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>مرکزی اعلام حریق</td>
                    <td>1</td>
                    <td>90</td>
                </tr>
            </table>
        </section>
        <section id="graph">
            <h1>نمودار فروش</h1>
        </section>
        <section id="todo">
            <h1>لیست کارها</h1>
            <table>
                <tr>
                    <th>کار</th>
                    <th>فوریت</th>
                </tr>
                <tr>
                    <td>بروزرسانی قیمت ها</td>
                    <td>بالا</td>
                </tr>
                <tr>
                    <td>تغیر سطح کاربری</td>
                    <td>متوسط</td>
                </tr>
            </table>
        </section>
        <section id="latest-orders">
            <h1>آخرین سفارش ها</h1>
            <table>
                <tr>
                    <th>کالا</th>
                    <th>تعداد</th>
                    <th>موجودی</th>
                </tr>
                <tr>
                    <td>دوربین داهوا 2مگاپیکسل</td>
                    <td>30</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>مرکزی اعلام حریق</td>
                    <td>1</td>
                    <td>90</td>
                </tr>
            </table>
        </section>
    </div>
@endsection
