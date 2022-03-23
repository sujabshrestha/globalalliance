<div class="about-us-wrap" style="background-image: url('/assets/images/pharmacy.png');">
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img src="{{ asset(getSiteSetting('aboutus_image')) ?? '' }}" alt="">
                </div>
                <div class="col-md-6 col-sm-12">
                    {!! getSiteSetting('about_description')  ?? '' !!}


                </div>
            </div>

        </div>
    </div>
</div>
