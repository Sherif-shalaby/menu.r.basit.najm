<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
{{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet"> --}}
<meta charset="UTF-8">
<meta name="description"
    content="This is an menu of restaurants linked to the cashier program as the requests reaches you on the program directly, Category: Foods">
<meta name="google-site-verification" content="qxW5PqYjtpOQSI6WJoytZMUkKkuD7iU0bo5v8wR_uHg" />
<meta name="robots" content="index, follow">
<meta name="googlebot" content="translate">
<meta name="google" content="sitelinkssearchbox">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{ App\Models\System::getProperty('site_title') }}</title>
@php($dir = LaravelLocalization::getCurrentLocaleDirection() != 'ltr' ? '.rtl' : '')
<link rel="stylesheet" type="text/css" href="{{ asset('front/bootstrap-5.0.2-dist/css/bootstrap' . $dir . '.min.css') }}">
<!--===============================================================================================-->
<link href="{{ asset('css/sweetalert2.min.css') }}" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/css/theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/css/main-style.css') }}">

<script src="{{ asset('front/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>

<style>
    @media (max-width: 700px) {
        .tt-desktop-header.top-header {

            display: wrap;
        }
    }

    ul.tt-social-icon li a {
        border: 2px solid;
        border-radius: 50%;
        padding: 5px;
    }

    .fa-facebook {
        color: #3B5998;
        padding: 5px 9px !important;
        background: white;
    }

    ul.tt-social-icon a.fa.fa-whatsapp,
    ul.tt-social-icon a.fa.fa-youtube {
        padding: 1.2px 5px;
        background-color: #0000;
    }

    button#dropdownMenuButton1 {
        padding: 5px;
        border: none;
        box-shadow: 1px 1px 6px 2px #00000061;
    }

    .dropdown {
        position: fixed;
        right: 5px;
        top: 10px;
        z-index: 99;
    }

    .tt-parent-box.entypo-export {
        position: fixed;
        left: 5px;
        top: 10px;
        z-index: 99;
        background-color: #fff;
        padding: 2px;
        border-radius: 15px;
    }

    img.lang-active,
    img.lang-item {
        width: 25px;
    }
</style>
