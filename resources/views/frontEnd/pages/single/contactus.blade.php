@extends('frontEnd.layout.master')


@section('content')
 <!--  ************************* Page Title Starts Here ************************** -->
 <div class="page-nav row">
    <div class="container">
        <div class="row">
            <h2>Contact US</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Contact US</li>
            </ul>
        </div>
    </div>
</div>

<!-- ######## Page  Title End ####### -->



<div style="margin-top:0px;" class="row no-margin">

<iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.061978482218!2d85.33142621503316!3d27.68447923310342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190b109ed8e5%3A0x426c2fb504b10d3d!2sAN4soft!5e0!3m2!1sen!2snp!4v1646229674951!5m2!1sen!2snp"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>

<div class="row contact-rooo no-margin">
<div class="container">
    <div class="row">


        <div style="padding:20px" class="col-sm-7">
           <form action="{{ route('front.submitContact') }}" method="POST">
           @csrf
            <h2 >Contact Form</h2> <br>
            <div class="row cont-row">
                <div  class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"  ></div>
            </div>
            <div  class="row cont-row">
                <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                <div class="col-sm-8"><input type="email" name="email" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
            </div>
            <div  class="row cont-row">
                <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                <div class="col-sm-8"><input type="text" name="phone" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
            </div>
            <div  class="row cont-row">
                <div  class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                <div class="col-sm-8">
                    <textarea rows="5" name="message" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                </div>
            </div>
            <div style="margin-top:10px;" class="row">
                <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn-primary">Send Message</button>
                </div>
            </div>
        </form>
        </div>
        <div class="col-sm-5">

            <div style="margin:50px" class="serv">





                <h2 style="margin-top:10px;">Address</h2>

                Buddhanagar, Kathmandu<br>
                Bagmati, Nepal<br>
                Phone:+977 98000000000<br>
                Email:support@globalalliance.com<br>
                Website:www.globalalliance.com<br>







            </div>


        </div>

    </div>
</div>

</div>
@endsection
