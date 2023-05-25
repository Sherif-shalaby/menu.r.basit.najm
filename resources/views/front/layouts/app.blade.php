<!DOCTYPE html>
<html lang="en">
<head>
     @include('front.layouts.partials.head')
    @yield('styles')
</head>
<body class="font-poppins">
        @include('front.layouts.partials.header')
    <main class="relative bg-cover bg-no-repeat bg-center"
        style="background-attachment: fixed;background-image: url('{{images_asset(!empty(session('page_background_image')) ? asset('uploads/' . session('page_background_image')) : asset('images/default-page-bg.png') )}}')">
        @yield('content')
{{--        <div class="flex-1 text-right">--}}
{{--            <button class="bg11 text-white font-semibold py-2 px-3 rounded-full mt-10" id="goToTop" onclick="topFunction()"><i--}}
{{--                    class="fa fa-arrow-up"></i></button>--}}
{{--        </div>--}}
    </main>
    @include('front.layouts.partials.footer')
    @yield('scripts')
</body>

</html>
