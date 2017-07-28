@extends('layouts.app')

<div style=" background: url({{asset('images/backgroundForSite.jpg') }}); height: 100%" class="main-block">

    @section('content')
       <div style=" background: url({{asset('images/appointment.png') }});height: 650px;  width: 940px;top: 0;
               right: 0;bottom: 0;left: 0;margin: auto;" class="main-block__foto">
       </div>

<div style=" align-items: center;
            display: flex;
            justify-content: center;
            color: white;
 font-size: 20px;






" class="text">
        If you want to make an appointment, write an email or call. (Contact information is in the contacts section) </div>
</div>
@endsection


