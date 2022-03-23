<footer class="footer ">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h2>About Us</h2>
                <p>
                    {!! Strip_tags(Str::limit(getSiteSetting('about_description') ?? '', 600)) !!}
                </p>
            </div>
            <div class="col-md-4 col-sm-12">
                <h2>Useful Links</h2>
                <ul class="list-unstyled link-list">
                    <li><a ui-sref="about" href="{{ route('front.about-us') }}">About us</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="portfolio" href="{{ route('front.appointment') }}">Travel</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="products" href="{{ route('front.allblogs') }}">Blogs</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="gallery" href="{{ route('front.albums') }}">Gallery</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="contact" href="{{ route('front.contact') }}">Contact us</a><i class="fa fa-angle-right"></i></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 map-img">
                <h2>Contact Us</h2>
                <address class="md-margin-bottom-40">
                    Address: {{ getSiteSetting('address') ?? 'Baneshwor, Kathmandu' }} <br>
                    Phone: +977 {{ getSiteSetting('primary_phone') ?? '98798798798897' }} <br>
                    Email: <a href="" class="">{{ getSiteSetting('primary_email') }}</a><br>
                    Web: <a href="" class="">www.example.com</a>
                </address>

            </div>
        </div>
    </div>


</footer>
<div class="copy">
        <div class="container">
            <a href="">2022 &copy; Developed by An4soft</a>

            <span>
            <a><i class="fab fa-github"></i></a>
            <a><i class="fab fa-google-plus-g"></i></a>
            <a><i class="fab fa-pinterest-p"></i></a>
            <a><i class="fab fa-twitter"></i></a>
            <a><i class="fab fa-facebook-f"></i></a>
    </span>
        </div>

    </div>
