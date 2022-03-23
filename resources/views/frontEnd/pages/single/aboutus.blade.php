@extends('frontEnd.layout.master')


@section('content')
<div class="page-nav row">
    <div class="container">
        <div class="row">
            <h2>About Global Assistance Alliences</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> About Us</li>
            </ul>
        </div>
    </div>
</div>
@include('frontEnd.pages.aboutus')


<div class="why-choose-us-wrap">
    <div class="why-choose-us">
        <div class="container">
            <div class="row session-title">
                <h2>Why Choose Us</h2>
                <p>Not the answer you're looking for? Printing and typesetting inLorem Ipsum </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="list_item">
                        <div>
                            <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/32/000000/external-check-seo-dreamstale-lineal-dreamstale.png" />
                        </div>
                        <div class="item_content">
                            <h4>Personalised Service</h4>
                            <p>Personalised Service as your needs</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="list_item">
                        <div>
                            <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/32/000000/external-check-seo-dreamstale-lineal-dreamstale.png" />
                        </div>
                        <div class="item_content">
                            <h4>Availability Anytime</h4>
                            <p>24/7 availability and real time updates </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="list_item">
                        <div>
                            <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/32/000000/external-check-seo-dreamstale-lineal-dreamstale.png" />
                        </div>
                        <div class="item_content">
                            <h4>Decentralize Service</h4>
                            <p>Available all over the country even in the remotest of the locations</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="list_item">
                        <div>
                            <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/32/000000/external-check-seo-dreamstale-lineal-dreamstale.png" />
                        </div>
                        <div class="item_content">
                            <h4>Financial Service</h4>
                            <p>Easy financial transactions </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontEnd.pages.team')
@endsection
