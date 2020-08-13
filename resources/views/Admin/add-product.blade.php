@extends('Admin.layouts.master')
@section('title', 'add product')
@section('style')
    <link rel="stylesheet" href="/css/admin/add-product.css">
@endsection

@section('body')
    <x-sidebar/>
    <!-- div.container is for stlying -->
    <!-- this page is basiclly six forms
        and all of them are used for categorizing
        the products  -->
    <div class="container">
        <!-- this one is for the name and quantity -->
        <form action="{{ route('products.store') }}" method="post" id="main-form">
            @csrf
            <div>
                <label for="title">عنوان</label>
                <input type="text" id="title" name="title">
                <label for="quantity">تعداد موجودی</label>
                <input type="text" id="quantity" name="quantity">
            </div>
            <!-- this one is only for the price -->
            <!-- !! i can put the "price" and "quantity" in
                    one form.becuase both of them are numbers
                    and handeling it might become easier for you !!-->
            <div>
                <label for="price" >قیمت</label>
                <input type="text" id="price" name="price" form="main-form">
            </div>
            <!-- this one is used for the main category
    of the product -->
            <div>
                <!-- this one used for the main category -->
                <label for="category" >دسته بندی</label>
                <select id="category" form="main-form">
                    <option value="customer">دوربن</option>
                    <option value="sender">درب برقی</option>
                    <option value="editor">دزدگیر</option>
                    <option value="maneger">اعلام حریق</option>
                </select>
                <!-- this one is for choosing the sub categories
                    like the brand -->
                <label for="sub-category" >زیر مجموعه</label>
                <select id="sub-category" form="main-form">
                    <option value="customer">دوربن</option>
                    <option value="sender">درب برقی</option>
                    <option value="editor">دزدگیر</option>
                    <option value="maneger">اعلام حریق</option>
                </select>
            </div>
            <!-- this one is for the explanation of every post -->
            <div>
                <label for="explain">توضیحات</label>
                <textarea id="explain" name="explain" form="main-form"></textarea>
            </div>
            <!-- these forms are the "مشخضات فنی" part in the
                    main website.you can change or set those values in
                    here.  -->
            <!-- these will change according the category and
                    sub category choosed above -->
            <div id="categorize">
                <label for="sub-category1" >رزولوشن</label>
                <select id="sub-category1" form="main-form">
                    <option value="2">2</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8">8</option>
                </select>

                <label for="sub-category2" >مدل</label>
                <select id="sub-category2" form="main-form">
                    <option value="ptzd">ptzd</option>
                    <option value="HDCVI">HDCVI</option>
                    <option value="analog">analog</option>
                    <option value="digital">digital</option>
                </select>

                <label for="sub-category3" >a</label>
                <select id="sub-category3" form="main-form">
                    <option value="b">b</option>
                    <option value="c">c</option>
                    <option value="d">d</option>
                    <option value="e">e</option>
                </select>

                <label for="sub-category4" >a</label>
                <select id="sub-category4" form="main-form">
                    <option value="b">b</option>
                    <option value="c">c</option>
                    <option value="d">d</option>
                    <option value="e">e</option>
                </select>
            </div>
            <!-- this one is used for uploading the
                    thumbnail photos -->
            <div>
                <label for="photo" >عکس ها </label>
                <input type="file" id="photo" name="photo" form="main-form">
            </div>
            <input type="submit" name="submit"  value="ذخیره" form="main-form">
        </form>
    </div>
@endsection
