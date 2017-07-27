@extends('layouts.app')


    <div style=" background: url({{asset('images/backgroundForSite.jpg') }}); height: 100%"class="main-block">

        @section('content')
    <div  class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <img src="/uploads/avatars/{{ $user->avatar }}" style="width: 150px; height: 150px; float: left;
                border-radius: 50%; margin-right:25px; ">
              <h2 style="color: white">{{$user->name}}'s Profile </h2>
                <form enctype="multipart/form-data" action="/home" method="post">
                    <label > <p style="color: #fff;">Update Profile Image</p></label>

                     <input  style="color: #fff; "type="file" name="avatar">
                    <input type= "hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
