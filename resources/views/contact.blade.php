@extends('layouts.app')

<div style=" background: url({{asset('images/backgroundForSite.jpg') }}); height: 100%" class="main-block">

@section('content')
    <div style="color: white; text-align:center; font-size: 50px; margin-left:40px;"
         class="contact__inform">
        Philadelphia Consultation Center
        313 S 16th Street
        Philadelphia, Pennsylvania 19102
       <p> 267-702-0258</p>

        <div class="inform__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3058.753019151031!2d-75.1701325846183!3d39.94691387942245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c63b1bfa77d9%3A0xad5677bf6c5a078c!2sPhiladelphia+Consultation+Center!5e0!3m2!1sru!2sru!4v1501194319954"
                width="800" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
@endsection


