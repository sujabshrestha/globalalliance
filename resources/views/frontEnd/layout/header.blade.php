<header class="container-fluid">
    <div class="main-header">
        <div class="container">
            <div class="row top-row">
                <div class="col-md-4 logo">
                    <a href="/">
                        <img class="for-lg" src="{{ asset(getSiteSetting('logo')) }} " alt="">
                    </a>
                    <a href="/">
                        <img class="for-sm" src="{{ asset('front/assets/images/g.png') }}" alt="">
                    </a>
                    <a data-toggle="collapse" data-target="#menu-jk" href="#menu-jk"><i
                            class="fas d-block d-md-none small-menu fa-bars"></i></a>
                </div>
                <div class="col-md-8 navse">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 d-none d-md-block cinfo">
                            <div class="cdetl">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="detail">
                                    <b>Dial now to reach 24 Hour Alarm Center – </b>
                                    <p>+977 {{ getSiteSetting('primary_phone') ?? '' }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 d-none d-lg-block cinfo">
                            <div class="cdetl">
                                <div class="icon">
                                    <!-- <i class="fas fa-map-marker-alt"></i> -->
                                    <i class="fa fa-bookmark"></i>
                                </div>
                                <div class="detail">
                                    <!-- <b>Book Appointment</b> -->
                                    <a href="{{ route('front.appointment') }}"
                                        class="btn btn-md btn-outline-primary">Book Appointment</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-none d-md-block cinfo">
                            <div class="cdetl">
                                <div class="icon">
                                    <i class="fa fa-language"></i>
                                </div>
                                <div class="detail">
                                    <b>Language</b>
                                    <div id="google_translate_element"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-jk" class="nav-sectionmk  row">
            <ul class="container">
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('front.about-us') }}">About US</a></li>
                <li><a href="{{ route('front.allservices') }}">Services</a></li>
                <li><a href="{{ route('front.appointment') }}">Travel</a></li>
                <li><a href="{{ route('front.allblogs') }}">News and Update</a></li>
                <li><a href="{{ route('front.appointment') }}">Tele Support</a></li>
                <li><a href="{{ route('front.contact') }}">Contact Us</a></li>
                <li class="aply">
                    <a class="btn btn-primary btn-sm" href="{{ route('front.appointment') }}">Send an Enquery</a>
                </li>
            </ul>
        </div>
    </div>
</header>
