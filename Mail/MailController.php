<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Mail;
class MailController extends Controller
{
    public function index(){
        return view('mailindex');
    }
    public function postmail(Request $request)
    
    {
          $data=array();
          $email=$request->email;
            $password=$request->password;
   $mail= Mail::to($request->email)->send(new WelcomeMail($email,$password));
     if($mail){
         return Redirect()->back();
     }


    }
}
