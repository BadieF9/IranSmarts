<?php
@extends('layouts.products-master')

@section('title', 'Document')

@section('style')
    <link rel="stylesheet" href="/css/main/info-products-technical-info.css">
@endsection

@section('body')
    <!-- this is an extention that will be added
        on the buttom of info product -->
    <section>
        <table>
            @if(isset($details->imageSensor))
                <tr>
                    <th>سنسور تصویر</th>
                    <th>{{ $details->imageSensor }}</th>
                </tr>
            @endif
            @if($details->effectivePixels)
                <tr>
                    <th>مقدار پیکسل مفید</th>
                    <th>{{ $details->effectivePixels }}</th>
                </tr>
            @endif
            @if($details->scanningSystem)
                <tr>
                    <th>سیستم اسکن</th>
                    <th>{{ $details->scanningSystem }}</th>
                </tr>
            @endif
            @if($details->electronicShutterSpeed)
                <tr>
                    <th>سرعت شاتر الکترونیکی</th>
                    <th>{{ $details->electronicShutterSpeed }}</th>
                </tr>
            @endif
            @if($details->minimumIllumination)
                <tr>
                    <th>حداقل روشنایی</th>
                    <th>{{ $details->minimumIllumination }}</th>
                </tr>
            @endif
            @if($details->snRatio)
                <tr>
                    <th>نسبت سیگنال به نویز</th>
                    <th>{{ $details->snRatio }}</th>
                </tr>
            @endif

        </table>
    </section>
@endsection
