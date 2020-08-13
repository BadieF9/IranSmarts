@extends('Admin.layouts.master')
@section('title', 'users')
@section('style')
    <link rel="stylesheet" href="/css/users.css">
@endsection

@section('body')

    <x-sidebar/>

    <!-- this page is basically a large list of
       users and their roles -->
    <div class="container">
        <section id="manegers">
            <span>مدیران</span>
            <div>
                <ul class="ul">
                    @foreach($admins as $admin)
                        <li>
                            <a href="/admin/user-info/{{ $admin->id }}">{{ $admin->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
        <section id="editors">
            <span>انبارداران</span>
            <div>
                <ul class="ul">
                    <li>
                        <a href="../html/users-info.html">ممد ادیتور</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد خوبو</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد قیمتی</a>
                    </li>
                </ul>
            </div>
        </section>
        <section id="senders">
            <span>مسئول جاب جایی</span>
            <div>
                <ul class="ul">
                    <li>
                        <a href="../html/users-info.html">ممد حمال</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد کار بلد</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد3</a>
                    </li>
                </ul>
            </div>
        </section>
        <section id="customers">
            <span>مشتری</span>
            <div>
                <ul class="ul last-ul">
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی1</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی2</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی3</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی1</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی2</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی3</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی1</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی2</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی3</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی1</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی2</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی3</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی1</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی2</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی3</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی1</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی2</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی3</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی1</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی2</a>
                    </li>
                    <li>
                        <a href="../html/users-info.html">ممد پلاستیکی3</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
@endsection
