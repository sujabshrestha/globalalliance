@extends('frontEnd.layout.master')

@section('content')

    <!-- ################# Slider Starts Here#######################--->
    @include('frontEnd.pages.slider')

    <!-- why choose us -->
    <div class="why-choose-us">
        <div class="container">
            <div class="welcome-you-top">
                <span>WELCOME TO</span>
                <h2>Global Assistance Alliance</h2>
                <!-- <h4>YOUR LOCAL ASSISTANCE PARTNER</h4> -->
            </div>
            <div class="row who-we-are-content">
                <div class="col-lg-6 col-sm-12">
                    @if (isset($whoweare))
                    @foreach ($whoweare as $weare)

                    <div class="who-we-are">
                        <h4>{{ $weare->title }}</h4>
                        <img src="{{ asset($weare->image) ?? ''}}" alt="">
                        {!! $weare->post_content !!}
                        <a href="{{ route('front.about-us') }}">Read More</a>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="why-choose-us-content">
                        <h4>Why Choose Us</h4>
                        <ul>
                            <li><i class="fa fa-location-arrow"></i>24 Hour Alarm Center</li>
                            <li><i class="fa fa-location-arrow"></i>In-House Medical Team for Personalised Care as Per Your Needs</li>
                            <li><i class="fa fa-location-arrow"></i>Available All Over The Country even in remote place</li>
                            <li><i class="fa fa-location-arrow"></i>Dedicated To Serving Customer</li>
                            <li><i class="fa fa-location-arrow"></i>Built on Clients Satisfaction</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Why Choose Us -->


    <!--*************** Key Features Starts Here ***************-->


    <!-- <div id="features" class="features container-fluid">
        <div class="container">
            <div class="session-title">
                <h2>Key Features of our Hospital</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Voluptatem, inventore</p>
            </div>
            <div class="ker-featur-row row">
                <div data-aos="fade-right" data-aos-duration="1500" class="col-md-4 featurecol feature-left">
                    <div class="single-feature">

                        <div class="detail">
                            <h6>100% Safety</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Voluptatem, inventore</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-bell"></i>
                        </div>


                    </div>
                    <div class="single-feature">

                        <div class="detail">
                            <h6>Friendly Doctors</h6>
                            <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit.
                                Voluptatem, inventore</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 featur-image">
                    <img src="assets/images/boct.jpg" alt="">
                </div>
                <div data-aos="fade-left" data-aos-duration="1500" class="col-md-4 featurecol feature-right">

                    <div class="single-feature">
                        <div class="icon">
                            <i class="far fa-images"></i>
                        </div>
                        <div class="detail">
                            <h6>Clean Environment</h6>
                            <p>Lorem ipsum dolor sit amet, consec tetur adipi sicing elit.
                                Voluptatem, inventore</p>
                        </div>
                    </div>
                    <div class="single-feature">
                        <div class="icon">
                            <i class="fab fa-audible"></i>
                        </div>
                        <div class="detail">
                            <h6>Medical Research</h6>
                            <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit.
                                Voluptatem, inventore</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--*************** Our Services Starts Here ***************-->
    @include('frontEnd.pages.ourservices')



    <!--*************** About Us Starts Here ***************-->
    @include('frontEnd.pages.aboutus')

    <!--  *************************Our Team Start Here ************************** -->
    @include('frontEnd.pages.team')


    <!-- ######## Our Team End ####### -->


    <!--*************** Our Blog Starts Here ***************-->

    @include('frontEnd.pages.blog')

    @include('frontEnd.pages.teleconsultancy')

       <!-- ################# Slider Starts Here#######################--->
    @include('frontEnd.pages.companyslider')

        <!-- ################# Footer Starts Here#######################--->


@endsection
