@extends('frontEnd.layout.master')


@section('content')
 <!--  ************************* Page Title Starts Here ************************** -->
 <div class="page-nav row">
    <div class="container">
        <div class="row">
            <h2>This is a News and Update title</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Our Blogs</a></li>
                <li><i class="fas fa-angle-double-right"></i> Single Blog</li>
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
                    <img src="{{ asset($blog->image) ?? ''}}" alt="">
                </div>
                <div class="service_content_details">
                    <span>{{ $blog->created_at->format('F M,Y') }}</span> <br> <br>
                    <h4>{{ $blog->title }}</h4>
                    {!! $blog->post_content !!}
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="service_aside">
                <div class="service_aside_title">
                    <span>Blog List</span>
                    <a href="{{ route('front.allblogs') }}"><i class="fa fa-th-list"></i> View All</a>
                </div>
                <ul>
                    @if (isset($posts))
                        @foreach ($posts as $post)
                            @if ($post->id != $blog->id)
                            <li>
                                <a href="{{ route('front.blogSingle', $post->slug) }}">
                                <span>
                                    <img src="{{ asset($post->image) ?? '' }}" alt="">
                                </span>
                                    <div class="titles">
                                        <h6>{{ $blog->title }}</h6>
                                        <span>{{ $blog->created_at->format('F M,Y') }}</span>
                                    </div>
                                </a>
                            </li>
                            @endif
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
