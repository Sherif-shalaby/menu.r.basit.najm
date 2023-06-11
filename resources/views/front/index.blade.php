@extends('front.layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <style>
        .div-containerall{
            background-color: rgb(249 251 255 / 65%);
        }
        section.section-menu {
            padding-bottom: 30px !important;
        }
        .div-text-header{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-bottom: 12px;
        }
        .div-text-header h3{
            font-size: 2rem;
            font-weight: bold;
        }
        .class-underline{
            width: 4rem;
        //height: 47px;
            border-bottom: 3px solid black;
            position: relative;
        }
        #mnubtns{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 2rem;
            width: 30em;
            margin: auto;
        }


        .swiper-backface-hidden .swiper-slide {
            transform: translateZ(0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }
        div.filter_menus {
            border: 2px solid brown;
            border-radius: 4px;
            cursor: pointer;
            background-color: transparent;
        }
        #mnubtns .filter_menus:hover{
            background-color: #A0522D;
        }
        #menudisplay{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            grid-template-rows: 1fr 1fr 1fr;
            grid-gap: 4rem;
            margin-left: 1rem;
            margin-right: 1rem;
        }
        .menus{
            width: 100% !important;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: flex-start;
            /*flex-wrap: wrap;*/
        }
        .contents{
            display: flex;
            width: 15rem;
            flex-direction: column;
            justify-content: flex-start;
            align-items: stretch;
        //ckground-color: grey;
            padding-left: 10px;
        }
        .titles{
            display: flex;
            flex-direction: row;
            justify-content:space-between;
            align-items: center;
            border-bottom: 2px dashed black;
        //background-color: white;
        }
        .titles h4{
            font-weight: bold;
        }
        .div-image{
            margin: auto !important;
        }
        .menus img{
            margin: auto !important;
            width: 80px;
            height:  80px;
            border: 2px solid brown;
            border-radius: 1rem;
        }
        .des{
            padding-top: 1vw;
            color: #696969;
        }
        .row {
            width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
        }
        .row-mySwiper {
            padding: 15px 5px 0;
            width: 100% !important;
        }
        .swiper.mySwiper.swiper-initialized.swiper-horizontal {
            padding: 0 0 30px;
        }
        .contents {
            width: 75% !important;
        }
        .div-image{
            width: 25% !important;
        }
        .filter_menus{
            font-size: 18px;
            font-weight: 500;
            text-align: center;
        }
        .tt-parent-box.entypo-export {
            display: inline-flex;
        }
        span {cursor:pointer; }


        .minus, .plus {
            width: 22px;
            padding: 0 !important;
            height: 25px;
            background: #6abc7d;
            border-radius: 4px;
            border: 1px solid #64be79;
            color: #fff;
            font-size: 18px;
            display: inline-block;
            vertical-align: middle;
            text-align: center;
        }
        span.minus {
            background: #d80027;
            border: 1px solid #d80027;
        }
        input {
            height: 25px;
            width: 45px;
            text-align: center;
            font-size: 18px;
            border: 1px solid #ddd;
            border-radius: 4px;
            display: inline-block;
            vertical-align: middle;
        }
        .titles h4 {
            padding-bottom: 0px !important;
            font-size: 17px !important;
        }
        span.span-total {
            border-radius: 15px;
            text-align: center;
            position: fixed;
            border: 1px #fff;
            box-shadow: 1px 1px 6px 1px #fff;
            background-color: #3eb7ac;
            bottom: 8px;
            color: #fff;
            font-size: 18px;
            padding: 5px 0;
        }
        button.button-total {
            border-radius: 15px;
            text-align: center;
            position: fixed;
            border: 1px #fff;
            box-shadow: 1px 1px 6px 1px #fff;
            background-color: #2c9d43;
            bottom: 8px;
            right: 5%;
            color: #fff;
            font-size: 18px;
            padding: 5px 0;
        }
        .col-12.div-text-header {
            padding-top: 10px;
        }
        img.img-text-header {
            width: 40%;
            border-radius: 15px;
            padding: 0 0 10px;
        }

        h1:not(.tt-title-subpages):not([class^="tt-title"]):not([class^="tt-collapse"]):not([class^="tt-aside"]) {

            padding: 0 0 10px !important;
        }
        .filter_menus {
            font-size: 16px;
        }
        div.filter_menus {
            border: 2px solid brown;
            border-radius: 4px;
            cursor: pointer;
            color: #000;
            background-color: #ffffffa3;
        }
        @media (max-width: 600px) {
            #mnubtns {
                width: 100%;
                flex-wrap: wrap;
            }


            #menudisplay {
                justify-content: center;

            }

            .menus img {
                margin: auto !important;
                width: 100px;
                height:  100px;
                border: 2px solid brown;
                border-radius: 1rem;
            }
            .titles h4 {
                font-weight: bold;
                font-size: 11px !important;
            }
            .des {
                font-size: 13px;
            }

            .contents {
                display: flex;
                width: 60vw;
                flex-direction: column;
                justify-content: flex-start;
                align-items: stretch;
            / / ckground-color: grey;
                padding-left: 10px;
            }
            .swiper.mySwiper.swiper-initialized.swiper-horizontal.swiper-backface-hidden {
                padding-bottom: 15px;
            }
            .swiper-pagination.swiper-pagination-clickable.swiper-pagination-bullets.swiper-pagination-horizontal {
                top: 28px;
            }
            .div-image {
                width: 18% !important;
            }
            .contents {
                width: 82% !important;
            }
            .titles {
                padding: 5px 0;
            }
            span.span-total {
                font-size: 13px !important;
            }
            span.span-total , button.button-total {
                width: 40%;
            }
            img.img-text-header {
                width: 50%;
                border-radius: 15px;
                padding: 0 0 10px;
            }
            label.font-semibold.text-base.cl0.mtext-101.pr-2.pt-1.float-left {
                font-size: 15px;
                font-weight: 500;
            }
            .filter_menus {
                font-size: 10px;
            }
        }

            @media (max-width: 400px) {
                #mnubtns {
                    width: 100%;
                    justify-content: center;
                    align-items: center;
                    flex-wrap: wrap;
                    padding-left: 0;
                }

                #mnubtns .filter_menus {
                    margin-right: 10vw;
                    margin-bottom: 5vw;
                }

                #menudisplay {
                    justify-content: center;
                    grid-gap: 15vw;

                }

                .menus img {
                    margin: auto !important;
                    width: 65px;
                    height: 65px;
                    border: 2px solid brown;
                    border-radius: 1rem;
                }

                .contents {
                    display: flex;
                    width: 80vw;
                    flex-direction: column;
                    justify-content: flex-start;
                    align-items: stretch;

                }
              .section-menu  .col-md-6 ,.section-menu .col-md-12 {
                    padding: 0 !important;
                    margin: 0 !important;
                }
                section.section-menu.w-100 {
                    margin-top: 35px;
                }
                .div-image {
                    width: 18% !important;
                }
                .contents {
                    width: 82% !important;
                }
                section.section-menu.w-100 {
                    padding: 0 !important;
                }
                img.img-text-header {
                    width: 50%;
                    border-radius: 15px;
                    padding: 0 0 10px;
                }
                .number {
                    width: 36% !important;
                }
                .h4-price{
                    width: 25% !important;
                    text-align: center;
                }
                .h4-name{
                    width: 39% !important;
                }
                h4:not([class^="tt-title"]):not([class^="tt-collapse"]):not([class^="tt-aside"]) {
                    font-size: 10px;
                    line-height: 18px !important;
                }
            }
        button#dropdownMenuButton1 {
            display: inline-flex;
        }
        .dropdown-toggle::after {
            margin: auto;
        }
        input.quantity {
            padding: 1px;
        }

    </style>
    @if(!\App\Models\System::getProperty('active_underline'))
        <style>
            .titles{
                border-bottom:none !important;
            }
        </style>

    @endif
    @if(!\App\Models\System::getProperty('active_image_product'))
        <style>
            .contents {
                width: 100% !important;
            }
            h4.h4-name {
                font-size: 16px !important;
                font-weight: 900 !important;
            }
        </style>
    @endif
@endsection
@section('content')
    @php($locale_direction=LaravelLocalization::getCurrentLocaleDirection()!= 'ltr' ?'.rtl': '')
    <div class="div-containerall">
        <div class="container">
            <div class="row justify-content-center">
                @if (session('success'))
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif






                {!! Form::open(['url' => action('OrderController@store'), 'method' => 'pos', 'id' => 'cart_form']) !!}

                @csrf
                <section class="section-menu w-100">
                    @if(\App\Models\System::getProperty('active_filter_category'))
                        <div class="row-mySwiper">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide filter_menus" id="all" >All</div>
                                    @foreach($categories as $category)
                                        <div class="swiper-slide filter_menus" id="category_{{$category->id}}">{{$category->name}}</div>
                                    @endforeach

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    @endif
                    <div class="row div-id-all" >
                        <div  class="col-md-12 row "  id="">
                            @foreach($categories as $category)
                                <div  class="col-md-6 "  >
                                    <div class="col-12 div-text-header">
                                        @if(\App\Models\System::getProperty('active_image_category'))
                                            <img  class="img-text-header" src="{{images_asset($category->getFirstMediaUrl('product_class'))}}">
                                        @endif
                                            <h1> {{ $category->name }} </h1>
                                        <div class="class-underline"> </div>
                                    </div>
                                    <div class="col-md-12"  >
                                        @foreach($category->products as $product)
                                            <div class="menus ">
                                                @if(\App\Models\System::getProperty('active_image_product'))
                                                <div class="div-image">
                                                    <img src="{{images_asset($product->getFirstMediaUrl('product'))}}" alt="{{$product->name}}">
                                                </div>
                                                @endif
                                                <div class="contents">
                                                    <div class="titles">
                                                        <h4 class="h4-name">{{$product->name}}</h4>
                                                        <h4 class="h4-price">  {{ session('currency')['code']  .  @num_format($product->sell_price - $product->discount_value) }}</h4>
                                                        <div class="number">
                                                            <span class="minus">-</span>
                                                            <input type="text" class="quantity quantity_{{$product->id}}  all_q_price" data-id="{{$product->id}}" data-price="{{@num_format($product->sell_price - $product->discount_value) }}" value="0" name="quantity[{{$product->id}}]"/>
                                                            <span class="plus">+</span>
                                                        </div>
                                                    </div>
                                                    <div class="des">
                                                        {!! $product->product_details !!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>


                        @if(\App\Models\System::getProperty('active_filter_category'))
                            <div class="row div-id-one" >
                                @foreach($categories as $category)

                                    <div  class="col-md-12 all-menus category_{{$category->id}}"  >
                                    <div class="col-12 div-text-header">
                                        @if(\App\Models\System::getProperty('active_image_category'))
                                            <img  class="img-text-header" src="{{images_asset($category->getFirstMediaUrl('product_class'))}}">
                                        @endif
                                        <h1> {{ $category->name }} </h1>
                                        <div class="class-underline"> </div>
                                    </div>
                                    <div class="row"  >
                                        @foreach($category->products as $product)
                                            <div class="col-md-6 menus ">
                                                @if(\App\Models\System::getProperty('active_image_product'))
                                                    <div class="div-image">
                                                        <img src="{{images_asset($product->getFirstMediaUrl('product'))}}" alt="{{$product->name}}">
                                                    </div>
                                                @endif
                                                <div class="contents">
                                                    <div class="titles">
                                                        <h4 class="h4-name">{{$product->name}}</h4>
                                                        <h4 class="h4-price">  {{ session('currency')['code']  .  @num_format($product->sell_price - $product->discount_value) }}</h4>
                                                        <div class="number">
                                                            <span class="minus">-</span>
                                                            <input type="text" class="quantity quantity_{{$product->id}}"data-id="{{$product->id}}" value="0" name="quantity[{{$product->id}}]"/>
                                                            <span class="plus">+</span>
                                                        </div>
                                                    </div>
                                                    <div class="des">
                                                        {!! $product->product_details !!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                @endforeach


                            </div>
                        @endif
                    <div class=" mx-auto py-4 mb-3">
                        <div class="flex lg:flex-row xs:flex-col py-4 bg11 opacity-80 row "  style="border-radius:15px;padding: 8px !important;">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="flex flex-row py-2 flow-root">
                                        <label
                                            class="font-semibold text-base cl0 mtext-101 pr-2 pt-1 @if ($locale_direction == 'rtl') float-right @else float-left @endif"
                                            for="customer_name">@lang('lang.name')</label>
                                        <input type="text" name="customer_name" required
                                               class="c-f-s bg12 border-b border-dark rounded-lg w-full px-4 w-3/5 @if ($locale_direction == 'rtl') float-left @else float-right @endif "
                                               value="">
                                    </div>
                                    <div class="flex flex-row py-2 flow-root">
                                        <label
                                            class="font-semibold text-base cl0 mtext-101 pr-2 pt-1 @if ($locale_direction == 'rtl') float-right @else float-left @endif"
                                            for="phone_number">@lang('lang.phone_number')</label>
                                        <input type="text" name="phone_number" required
                                               class="c-f-s bg12 border-b border-dark rounded-lg w-full px-4 w-3/5 @if ($locale_direction == 'rtl') float-left @else float-right @endif "
                                               value="">
                                    </div>
                                    <div class="flex flex-row py-2 flow-root">
                                        <label
                                            class="font-semibold text-base cl0 mtext-101 pr-2 pt-1 @if ($locale_direction == 'rtl') float-right @else float-left @endif"
                                            for="address">@lang('lang.address')</label>
                                        <input type="text" name="address"
                                               class=" c-f-s bg12 border-b border-dark rounded-lg w-full px-4 w-3/5 @if ($locale_direction == 'rtl') float-left @else float-right @endif "
                                               value="">
                                    </div>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label
                                        class="font-semibold text-base cl0 mtext-101  @if ($locale_direction == 'rtl') float-right @else float-left @endif"
                                        for="sales_note">@lang('lang.notes')</label>
                                    <textarea class="c-f-s bg12 border-b border-dark rounded-lg w-full px-4" name="sales_note" id="sales_note" rows="3"></textarea>
                                </div>



                                <div class="flex py-2 justify-center">
                                    <div class="flex-1">
                                        <label class="order_now font-semibold text-base cl0 mtext-101 pr-2 pt-1 float-right"
                                               for="order_now">@lang('lang.order_now')</label>
                                    </div>
                                    <div class="flex w-16 justify-center">
                                        <div class="mt-1">
                                            <label for="order" class="flex relative items-center mb-4 cursor-pointer">
                                                <input type="checkbox" name="order_type" id="order" value="1" class="sr-only">
                                                <div
                                                    class="w-11 h-6 bg-gray-200 rounded-full border border-red toggle-bg dark:bg-gray-700 dark:border-gray-600">
                                                </div>
                                                <span class="ml-3 text-sm font-medium cl5 dark:text-gray-300"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <label class="order_later font-semibold text-base text-lightgrey pr-2 pt-1 float-left"
                                               for="order_later">@lang('lang.order_later')</label>
                                    </div>
                                </div>
                                <div class="flex flex-row justify-center order_later_div hidden  row">
                                    <div class="flex flex-row col-md-8"  style="margin-top: 10px;">
                                        <img class="md:h-8 md:w-12 xs:h-4 xs:w-8 px-2 md:mt-1 xs:mt-4"
                                             src="{{ asset('images/calender-icon.png') }}" alt="">
                                        <select id="month" name="month"
                                                class="font-select w-32 mx-2 bg12 border border-gray-300 cl5 md:text-base xs:text-xs rounded-lg focus:ring-blue-500 focus:bg12 border-blue-500 block w-full md:p-2.5 xs:p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:bg12 border-blue-500">
                                            @foreach ($month_array as $key => $month)
                                                <option @if ($key == date('m')) selected @endif value="{{ $key }}">
                                                    {{ $month }}</option>
                                            @endforeach
                                        </select>
                                        <select id="day" name="day"
                                                class="font-select w-32 mx-2 bg12 border border-gray-300 cl5 md:text-base xs:text-xs rounded-lg focus:ring-blue-500 focus:bg12 border-blue-500 block w-full md:p-2.5 xs:p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:bg12 border-blue-500">
                                            @foreach (range(1, 31, 1) as $i)
                                                <option @if ($i == date('d')) selected @endif value="{{ $i }}">
                                                    {{ $i }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-6" style="display: inline-flex;margin-top: 10px;">
                                        <img class="md:h-8 md:w-12 xs:h-4 xs:w-8 px-2 md:mt-1 xs:mt-4"
                                             src="{{ asset('images/time-icon.png') }}" alt="">
                                        <input type="time" name="time" id="base-input" value="{{ date('H:i') }}"
                                               class="font-select w-32 bg12 border border-gray-300 cl5 md:text-base xs:text-xs rounded-lg focus:ring-blue-500 focus:bg12 border-blue-500 block w-full py-2.5 px-0 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:bg12 border-blue-500">
                                    </div>
                                </div>

                                <div class="flex flex-row py-2 justify-center items-center">
                                    <div class="flex-1 text-center">
                                        <input type="radio" name="delivery_type" value="i_will_pick_it_up_my_self" required
                                               class="w-4 h-4 border-red focus:ring-2 focus:ring-red dark:focus:ring-red dark:focus:bg11 dark:bg-gray-700 dark:border-red"
                                               aria-labelledby="radio" aria-describedby="radio">
                                        <label class="i_will_pick font-semibold md:text-base xs:text-xs cl0 mtext-101 pl-2"
                                               for="i_will_pick_it_up_my_self">@lang('lang.i_will_pick_it_up_my_self')</label>
                                    </div>
                                    <div class="flex-1 text-center">
                                        <input type="radio" name="delivery_type" value="home_delivery" checked required
                                               class="w-4 h-4 border-red focus:ring-2 focus:ring-red dark:focus:ring-red dark:focus:bg11 dark:bg-gray-700 dark:border-red"
                                               aria-labelledby="radio" aria-describedby="radio">
                                        <label class="i_will_pick font-semibold md:text-base xs:text-xs cl0 mtext-101 pl-2"
                                               for="home_delivery">@lang('lang.home_delivery')</label>
                                    </div>
                                    <div class="flex-1 text-center">
                                        <input type="radio" name="delivery_type" value="dining_in" required
                                               class="w-4 h-4 border-red focus:ring-2 focus:ring-red dark:focus:ring-red dark:focus:bg11 dark:bg-gray-700 dark:border-red"
                                               aria-labelledby="radio" aria-describedby="radio">
                                        <label class="i_will_pick font-semibold md:text-base xs:text-xs cl0 mtext-101 pl-2"
                                               for="dining_in">@lang('lang.dining_in')</label>
                                    </div>
                                </div>

                                <div class="col-md-12 inside_restaurant_div hidden ">
                                    <label class="w-1/4 font-semibold text-base cl0 mtext-101 pr-2 pt-1 float-left"
                                           for="table_no">@lang('lang.table_no')</label>

                                    <select id="table_no" name="table_no"
                                            class="w-3/4 mx-2 bg12 border border-gray-300 cl5 text-sm rounded-lg focus:ring-blue-500 focus:bg12 border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:bg12 border-blue-500">
                                        <option value="">@lang('lang.please_select')</option>
                                        @foreach ($dining_tables as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>


                            </div>

                        </div>
                    </div>

                </section>
                <div class="div-total row">
                    <span class="span-total col-md-4 col-6">
                            L.E 0
                    </span>
                    <span class="col-md-4 col-6">

                    </span>
                    <button class="col-md-4 col-6  button-total" id="send_the_order">
                        @lang('lang.send_the_order')
                    </button>
                </div>

                <input type="hidden" id="quantity_all_products" value="0">
                <input type="hidden" id="currency" value="{{session('currency')['code']}}">
                <input type="hidden" id="total_price"  value="0">
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <!-- Swiper JS -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://fastly.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 7,
            spaceBetween: 10,
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 5,
                    spaceBetween: 10
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 7,
                    spaceBetween: 10
                }
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <script>
        $('.div-id-one').hide();
        $('.filter_menus').on('click', function() {
            // Get the ID of the clicked button
            var buttonId = $(this).attr('id');

            // Show or hide the div based on the button's ID
            if (buttonId === 'all') {
                $('.div-id-one').hide();
                $('.div-id-all').show();
            }  else {
                // Handle other buttons if needed
                $('.div-id-all').hide();
                $('.all-menus').hide();
                $('.div-id-one').show();
                $('.'+buttonId).show();
            }
        });
        $(document).ready(function() {
            $('.minus').click(function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 0 ? 0 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.plus').click(function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });
        });
    </script>
    <script>
        $(document).on('click', '#send_the_order', function(e) {
            e.preventDefault();
            $('input[type=text]').blur();
            var quantity_all_products = $('#quantity_all_products').val();
            console.log(quantity_all_products);
            if(quantity_all_products >= 1){
                if (!$('#cart_form').valid()) {
                    var firstInvalidField = $('#cart_form').find(':input.error').first();
                    $('html, body').animate({
                        scrollTop: firstInvalidField.offset().top
                    }, 500);
                    firstInvalidField.focus();
                }else{
                    $('.quantity').each(function() {
                        if ($(this).val() == '' ||$(this).val()==0 ) {
                            $(this).remove();
                        }
                    });
                    $('#cart_form').submit();
                }
            }else{
                swal("Oops...", '{{__('lang.Please choose at least one product')}}', "error");
                $('html, body').animate({scrollTop: 0}, 'slow');
            }
        });
        $(document).on('change', '.extra_checkbox', function() {
            let product_id = $(this).val();
            if ($(this).prop('checked') == true) {
                window.location.href = base_path + "/cart/add-to-cart-extra/" + product_id;
            } else {
                window.location.href = base_path + "/cart/remove-product/" + product_id;
            }
        })

        $(document).on('change', '.variation_radio', function() {

            if ($(this).prop('checked') == true) {
                let product_id = $(this).data('id');
                let variation_id = $(this).val();

                window.location.href = base_path + "/cart/update-product-variation/" + product_id + "/" +
                    variation_id;
            }
        })
        $(document).on('change', '.quantity', function() {

            let product_id = $(this).data('id');
            let quantity = $(this).val();

            $('.quantity_'+product_id).val(quantity);
            sumTotalPrice();

        })
        $(document).on('change', '#order', function() {
            if ($(this).prop('checked') == true) {
                $('.order_now').removeClass('cl0 mtext-101');
                $('.order_now').addClass('text-lightgrey');

                $('.order_later').addClass('cl0 mtext-101');
                $('.order_later').removeClass('text-lightgrey');
                $('.order_later_div').removeClass('hidden');
            } else {
                $('.order_now').addClass('cl0 mtext-101');
                $('.order_now').removeClass('text-lightgrey');

                $('.order_later').removeClass('cl0 mtext-101');
                $('.order_later').addClass('text-lightgrey');
                $('.order_later_div').addClass('hidden');
            }
        })

        $(document).on('change', 'input[name="delivery_type"]', function() {
            if ($(this).val() == 'dining_in') {
                $('.inside_restaurant_div').removeClass('hidden');
                $('#table_no').attr('required', true);
            } else {
                $('.inside_restaurant_div').addClass('hidden');
                $('#table_no').attr('required', false);
            }
        })

        $(document).on('change', '#delivery', function() {
            if ($(this).prop('checked') == true) {
                $('.i_will_pick').removeClass('cl0 mtext-101');
                $('.i_will_pick').addClass('text-lightgrey');

                $('.home_delivery').addClass('cl0 mtext-101');
                $('.home_delivery').removeClass('text-lightgrey');
            } else {
                $('.i_will_pick').addClass('cl0 mtext-101');
                $('.i_will_pick').removeClass('text-lightgrey');

                $('.home_delivery').removeClass('cl0 mtext-101');
                $('.home_delivery').addClass('text-lightgrey');
            }
        })
        function sumTotalPrice() {
            var sum = 0;
            var sumPrice = 0;
            $('.all_q_price').each(function() {
                var value = parseFloat($(this).val());
                var priceOne = parseFloat($(this).data('price'));

                if (!isNaN(value)) {
                    sum += value;
                    sumPrice+=(value * priceOne)
                }
            });
            $('#quantity_all_products').val(sum);

           var  span_total = $('#currency').val()+' ' + sumPrice;
            $('.span-total').text(span_total);
            $('#total_price').val(sumPrice);
        }
    </script>
@endsection
