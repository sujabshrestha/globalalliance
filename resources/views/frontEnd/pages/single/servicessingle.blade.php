@extends('frontEnd.layout.master')


@section('content')
 <!--  ************************* Page Title Starts Here ************************** -->
 <div class="page-nav row">
    <div class="container">
        <div class="row">
            <h2>This is a service title</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Our Serives</a></li>
                <li><i class="fas fa-angle-double-right"></i> Single Service</li>
            </ul>
        </div>
    </div>
</div>

<!-- ######## Page  Title End ####### -->



<!--*************** Our Blog Starts Here ***************-->

<div class="sigle_service">
<div class="container">
    <div class="blog-row row">
        <div class="col-lg-8 col-md-8">
            <div class="single_service_container">
                <div class="service_image_container">
                    <img src="{{ asset($service->image) ?? '' }}" alt="">
                </div>
                <div class="service_content_details">
                    <span>{{ $service->created_at->format('F M, Y') }}</span>
                    <h4>{{ $service->title }}</h4>
                    {!! $service->post_content !!}
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="service_aside">
                <div class="service_aside_title">
                    <span>Service List</span>
                    <a href="{{ route('front.allservices') }}"><i class="fa fa-th-list"></i> View All</a>
                </div>
                <ul>
                    @if (isset($otherservices))
                    @foreach ($otherservices as $otherservice)


                    <li>
                        <a href="{{ route('front.servicessingle', $otherservice->slug) }}">
                        <span>
                            <img src="{{ asset($otherservice->image) ?? '' }}" alt="">
                        </span>
                            <div class="titles">
                                <h6>{{ $otherservice->title }}</h6>
                                <span>{{ $otherservice->created_at->format('F M, Y') }}</span>
                            </div>
                        </a>
                    </li>
                    @endforeach
                    @endif

                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<!-- ################# Footer Starts Here#######################--->

@endsection
