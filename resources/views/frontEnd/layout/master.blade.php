<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Global Alliance</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('front/assets/images/fav.jpg') }} ">
    <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/plugins/slider/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/plugins/slider/css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/style.css') }}" />
</head>

<body>
    @include('frontEnd.layout.topHeader')

    @include('frontEnd.layout.header')


    @yield('content')

    <div class="alarm_center">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="hotline_details">
                        <h2>Our Hotline Number</h2>
                        <h2 class="phone_num">+977{{ getSiteSetting('primary_phone') ?? '' }}, +977{{ getSiteSetting('secondary_phone') ?? '' }}</h2>
                        <p>We are Available 24/7 for your serivce</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="dial_call">
                        <i class="fa fa-volume-control-phone"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontEnd.pages.footer')


</body>



<script src="{{ asset('front/assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('front/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ asset('front/assets/plugins/slider/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<script src="{{ asset('front/assets/js/script.js') }}"></script>

</html>
