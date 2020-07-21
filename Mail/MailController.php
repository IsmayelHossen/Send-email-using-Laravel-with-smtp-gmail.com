<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use App\Notifications\Welcomenotif;
use Mail;
use DB;
use App\User;
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
            //first option using Mail
   $mail= Mail::to($request->email)->send(new WelcomeMail($email,$password));
//      if($mail){
//          return Redirect()->back();
//      }
//second option using Notifications
$user=User::find(1);
 $user->notify(new Welcomenotif($user));



    }
}
