@extends('Admin.layouts.master')
@section('title', 'order info')
@section('style')
    <link rel="stylesheet" href="/css/orders-info.css">
@endsection

@section('body')

    <x-sidebar/>

    <!-- a table info of the orders info -->
    <div class="container">
        <section>
            <span>
                2/8/99
            </span>
            <table class="list">
                <tr>
                    <th>کالا</th>
                    <th>تعداد</th>
                    <th>قیمت کل</th>
                </tr>
                <tr>
                    <td>دوربین داهوا 2مگاپیکسل</td>
                    <td>30</td>
                    <td>200000000</td>
                </tr>
                <tr>
                    <td>مرکزی اعلام حریق</td>
                    <td>1</td>
                    <td>1450000</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th>
                        آدرس:
                    </th>
                    <td>
                        فلان اول کوچه فلان دوم فلان پنجم پلاک فلان
                    </td>
                </tr>
            </table>
        </section>
    </div>
@endsection
