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
                @if($details->irDistance)
                    <tr>
                        <th>فاصله سنسور مادون قرمز</th>
                        <th>{{ $details->irDistance }}</th>
                    </tr>
                @endif
                @if($details->irOnOffControl)
                    <tr>
                        <th>قابلیت روشن و خاموش کردن سنسور مادون قرمز</th>
                        <th>{{ $details->irOnOffControl }}</th>
                    </tr>
                @endif
                @if($details->irLEDs)
                    <tr>
                        <th>ال ای دی های مادون قرمز</th>
                        <th>{{ $details->irLEDs }}</th>
                    </tr>
                @endif
                @if($details->audioIn)
                    <tr>
                        <th>میکروفون</th>
                        <th>{{ $details->audioIn }}</th>
                    </tr>
                @endif
                @if($details->lensType)
                    <tr>
                        <th>نوع لنز</th>
                        <th>{{ $details->lensType }}</th>
                    </tr>
                @endif
                @if($details->mountType)
                    <tr>
                        <th>نوع نصب</th>
                        <th>{{ $details->mountType }}</th>
                    </tr>
                @endif
                @if($details->focalLength)
                    <tr>
                        <th>فاصله کانونی</th>
                        <th>{{ $details->focalLength }}</th>
                    </tr>
                @endif
                @if($details->maxAperture)
                    <tr>
                        <th>محدوده دیافراگم</th>
                        <th>{{ $details->maxAperture }}</th>
                    </tr>
                @endif
                @if($details->angleOfView)
                    <tr>
                        <th>زاویه دید</th>
                        <th>{{ $details->angleOfView }}</th>
                    </tr>
                @endif
                @if($details->focusControl)
                    <tr>
                        <th>کنترل فوکس</th>
                        <th>{{ $details->focusControl }}</th>
                    </tr>
                @endif
                @if($details->closeFocusDistance)
                    <tr>
                        <th>فاصله فوکس نزدیک</th>
                        <th>{{ $details->closeFocusDistance }}</th>
                    </tr>
                @endif
                @if($details->rotation)
                    <tr>
                        <th>چرخش</th>
                        <th>{{ $details->rotation }}</th>
                    </tr>
                @endif
                @if($details->pan)
                    <tr>
                        <th>پن</th>
                        <th>{{ $details->pan }}</th>
                    </tr>
                @endif
                @if($details->tilt)
                    <tr>
                        <th>تیلت </th>
                        <th>{{ $details->tilt }}</th>
                    </tr>
                @endif
                @if($details->resolution)
                    <tr>
                        <th>رزولوشن </th>
                        <th>{{ $details->resolution }}</th>
                    </tr>
                @endif
                @if($details->frameRate)
                    <tr>
                        <th>نرخ فریم</th>
                        <th>{{ $details->frameRate }}</th>
                    </tr>
                @endif
                @if($details->videoOutput)
                    <tr>
                        <th>خروجی ویدئو</th>
                        <th>{{ $details->videoOutput }}</th>
                    </tr>
                @endif
                @if($details->dayNight)
                    <tr>
                        <th>روز/شب</th>
                        <th>{{ $details->dayNight }}</th>
                    </tr>
                @endif
                @if($details->osd)
                    <tr>
                        <th>OSD</th>
                        <th>{{ $details->osd }}</th>
                    </tr>
                @endif
                @if($details->backlightCompensation)
                    <tr>
                        <th>BLC</th>
                        <th>{{ $details->backlightCompensation }}</th>
                    </tr>
                @endif
                @if($details->wdr)
                    <tr>
                        <th>WDR</th>
                        <th>{{ $details->wdr }}</th>
                    </tr>
                @endif
                @if($details->gainControl)
                    <tr>
                        <th>Gain Control</th>
                        <th>{{ $details->gainControl }}</th>
                    </tr>
                @endif
                @if($details->noiseReduction)
                    <tr>
                        <th>کاهش نویز</th>
                        <th>{{ $details->noiseReduction }}</th>
                    </tr>
                @endif
                @if($details->whiteBalance)
                    <tr>
                        <th>White Balance</th>
                        <th>{{ $details->whiteBalance }}</th>
                    </tr>
                @endif
                @if($details->smartIR)
                    <tr>
                        <th>Smart IR</th>
                        <th>{{ $details->smartIR }}</th>
                    </tr>
                @endif
                @if($details->certifications)
                    <tr>
                        <th>گواهی نامه ها</th>
                        <th>{{ $details->certifications }}</th>
                    </tr>
                @endif
                @if($details->audioInterface)
                    <tr>
                        <th>رابط صدا</th>
                        <th>{{ $details->audioInterface }}</th>
                    </tr>
                @endif
                @if($details->alarmIO)
                    <tr>
                        <th>ورودی/خروجی صدا</th>
                        <th>{{ $details->alarmIO }}</th>
                    </tr>
                @endif
                @if($details->powerSupply)
                    <tr>
                        <th>منبع تغذیه</th>
                        <th>{{ $details->powerSupply }}</th>
                    </tr>
                @endif
                @if($details->powerConsumption)
                    <tr>
                        <th>محدوده کار</th>
                        <th>{{ $details->powerConsumption }}</th>
                    </tr>
                @endif
                @if($details->operatingConditions)
                    <tr>
                        <th>شرایط کار</th>
                        <th>{{ $details->operatingConditions }}</th>
                    </tr>
                @endif
                @if($details->storageConditions)
                    <tr>
                        <th>شرایط انبار</th>
                        <th>{{ $details->storageConditions }}</th>
                    </tr>
                @endif
                @if($details->vandalResistance)
                    <tr>
                        <th>مقاومت در برابر خرابکاری</th>
                        <th>{{ $details->vandalResistance }}</th>
                    </tr>
                @endif
                @if($details->casing)
                    <tr>
                        <th>کیس</th>
                        <th>{{ $details->casing }}</th>
                    </tr>
                @endif
                @if($details->dimensions)
                    <tr>
                        <th>ابعاد</th>
                        <th>{{ $details->dimensions }}</th>
                    </tr>
                @endif
                @if($details->netWeight)
                    <tr>
                        <th>وزن کالا</th>
                        <th>{{ $details->netWeight }}</th>
                    </tr>
                @endif
                @if($details->grossWeight)
                    <tr>
                        <th>وزن خالص</th>
                        <th>{{ $details->grossWeight }}</th>
                    </tr>
                @endif

               </table>
    </section>
@endsection
