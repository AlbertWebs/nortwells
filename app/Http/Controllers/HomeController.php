<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SendMail;
use Session;

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
        Session::flash('message', "Message Sent Successfully");
        return redirect()->back()->with('success', 'Message Sent Successfully');
    }

    public function begin(Request $request){
        $name = $request->name;
        $email = $request->email;
        $nationality = $request->nationality;
        $residence = $request->residence;
        $date = $request->date;
        $time = $request->time;
        $service = $request->service;
        $mes = $request->message;
        $message = 'Hello Admin, A Client by the name '.$name.', Email '.$email.' Nationality '.$nationality.', and Resience '.$residence.' is inquiring about service '.$service.' Has requested appointment for date '.$date.', at '.$time.'  ' ;
        //Send Email
        SendMail::sendTheEmail($name, $email, $message);
        Session::flash('message', "Message Sent Successfully");
        return redirect()->back()->with('success', 'Message Sent Successfully');
    }
}
