<div class="slider">
    <!-- Set up your HTML -->
    <div class="owl-carousel owl_banner">

        @if (isset($sliders) && $sliders->count() > 0)
        @foreach ($sliders as $slider)

        <div class="item">
            <div class="slider-img"><img src="{{ asset($slider->image)  ?? ''}} " style="height:600px;" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                        <div class="slider-captions">

                            <h1 class="slider-title">{{ $slider->title }}</h1>
                            <span class="text-white">
                                {!! $slider->post_content !!}
                            </span>
                            @if ($slider->id == 1)
                            <a href="#" class="btn btn-primary hidden-xs mt-3">Schedule A Visit</a>
                            @else
                            <a href="" class="btn btn-primary hidden-xs mt-3">Meet Psychiatrist</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif

    </div>
</div>
