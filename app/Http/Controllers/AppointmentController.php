<?php

namespace App\Http\Controllers;


class AppointmentController extends Controller{
//   public function __construct()
//   {
//       $this->middleware('guest');
//
//   }


   public function showAppointment(){
       return view('appointment');
   }
}
