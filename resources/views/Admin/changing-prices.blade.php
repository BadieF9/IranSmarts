@extends('Admin.layouts.master')
@section('title', 'changing prices')
@section('style')
    <link rel="stylesheet" href="/css/changing-prices.css">
@endsection

@section('body')

    <x-sidebar/>
    <!-- the div with the class of container
     is the container of the main things, used
     in the css for centering -->
    <!-- <table> is a table that in it there
        are some forms and input elements and a
        submit button used for submitting all the
        info -->
    <div class="container">
        <table>
            <tr>
                <!-- the top row of the table -->
                <th>کالا</th>
                <th>تعداد</th>
                <th>قیمت</th>
            </tr>
            <tr>
                <td>دوربین فلان</td>
                <td>
                    <!-- the input in witch you must write
                        the quantity of the product -->
                    <form action="" method="POST">
                        <input type="text">
                    </form>
                </td>
                <td>
                    <!-- input for the price of the product -->
                    <form action="" method="POST">
                        <input type="text">
                    </form>
                </td>
            </tr>
            <tr>
                <td>اونیکی دوربین</td>
                <td>
                    <!-- the input in witch you must write
                        the quantity of the product -->
                    <form action="" method="POST">
                        <input type="text">
                    </form>
                </td>
                <td>
                    <!-- input for the price of the product -->

                    <form action="" method="POST">
                        <input type="text">
                    </form>
                </td>
            </tr>
        </table>
        <!-- the submit button -->
        <form action="" method="POST">
            <input type="submit">
        </form>
    </div>

@endsection
