<?php

namespace App\Http\Controllers;


class PaymentController extends Controller{
//   public function __construct()
//   {
//       $this->middleware('guest');
//
//   }


   public function showPayment(){
       return view('payment');
   }
}
