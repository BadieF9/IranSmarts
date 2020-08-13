@extends('layouts.master')

@section('title', 'main')

@section('style')
    <link rel="stylesheet" href="/css/main/landing-page.css">
@endsection

@section('body')
    <div class="all_container">

        <!-- this is the main page -->
        <section id="special-offer">
            <h1>پیشنهاد ویژه</h1>
            <div class="special_offer_holder">
                <div class="price_holder">
                    <h2>پکیج دوربین داهوا</h2>
                    <h4>300000</h4>
                    <h1>250900</h1>
                </div>
                <div class="sideshow_holder">
                    <button> < </button>
                    <img src="/img/thumb.png" alt="">
                    <button> > </button>
                </div>
            </div>
        </section>
        <section id="banner">
            <img src="/img/smart-home.png" alt="">
            <h1>خانه هوشمند ممد</h1>
            <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
            </p>
        </section>
        <nav>
            <h1>
                محصولات:
            </h1>
            <div class="card_holder">
                <div class="card">
                    <img src="/img/thumb.png" alt="پکیج دوربین داهوا">
                    <a href="../html/list-products.html" class="to-see">مشاهده</a>
                    <h1> دوربین </h1>
                </div>
                <div class="card">
                    <img src="/img/thumb.png" alt="پکیج دوربین داهوا">
                    <a href="../html/list-products.html" class="to-see">مشاهده</a>
                    <h1> درب برقی </h1>
                </div>
                <div class="card">
                    <img src="/img/thumb.png" alt="پکیج دوربین داهوا">
                    <a href="../html/list-products.html" class="to-see">مشاهده</a>
                    <h1> اعلام حریق </h1>
                </div>
                <div class="card">
                    <img src="/img/thumb.png" alt="پکیج دوربین داهوا">
                    <a href="../html/list-products.html" class="to-see">مشاهده</a>
                    <h1> دزدگیر </h1>
                </div>
            </div>
        </nav>
    </div>
@endsection
