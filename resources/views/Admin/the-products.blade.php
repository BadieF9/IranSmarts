@extends('Admin.layouts.master')
@section('title', 'the products')
@section('style')
    <link rel="stylesheet" href="/css/the-products.css">
@endsection

@section('body')

    <x-sidebar/>

    <!-- a read-only list of the products -->
    <div class="container">
        <section>
            <h1>دوربین</h1>
            <ul>
                @foreach($cameras as $camera)

                            <li><a>{{ $camera->name }}</a></li>
                @endforeach
            </ul>

        </section>
        <section>
            <h1>اعلام حریق</h1>
            <ul>
                <li>
                    <h4>رزولوشن</h4>
                    <ul>
                        <li><a>2 مگاپیکسل</a></li>
                        <li><a>4 مگاپیکسل</a></li>
                        <li><a>6 مگاپیکسل</a></li>
                    </ul>
                </li>
                <li>
                    <h4>رزولوشن</h4>
                    <ul>
                        <li><a>2 مگاپیکسل</a></li>
                        <li><a>4 مگاپیکسل</a></li>
                        <li><a>6 مگاپیکسل</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <section>
            <h1>درب برقی</h1>
            <ul>
                @foreach($gateOpeners as $gateOpener)

                    <li><a>{{ $gateOpener->name }}</a></li>

                @endforeach
            </ul>
        </section>
        <section>
            <h1>دزدگیر</h1>
            <ul>
                <li>
                    <h4>رزولوشن</h4>
                    <ul>
                        <li><a>2 مگاپیکسل</a></li>
                        <li><a>4 مگاپیکسل</a></li>
                        <li><a>6 مگاپیکسل</a></li>
                    </ul>
                </li>
                <li>
                    <h4>رزولوشن</h4>
                    <ul>
                        <li><a>2 مگاپیکسل</a></li>
                        <li><a>4 مگاپیکسل</a></li>
                        <li><a>6 مگاپیکسل</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </div>
@endsection
