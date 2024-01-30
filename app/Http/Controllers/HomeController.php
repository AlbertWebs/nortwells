<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SendMail;

class HomeController extends Controller
{
    public function message(Request $request){

        $name = $request->name;
        $email = $request->email;
        $nationality = $request->nationality;
        $service = $request->service;
        $residence = $request->residence;
        $message = 'Hello Admin, A Client by the name '.$name.', Email '.$email.' Nationality '.$nationality.', and Resience '.$residence.' is inquiring about service '.$service.' ' ;
        //Send Email
        SendMail::sendTheEmail($name, $email, $message);
    }
}
