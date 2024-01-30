<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class SendMail extends Model
{
    use HasFactory;

    public static function sendTheEmail($name, $email, $message){
        //The Generic mailler Goes here
        $subject = "You Have a New Message";
        $messageee = ''.$message.'';
        $data = array(
            'content'=>$messageee,
            'subject'=>$subject,
        );

        $appName = "Nortwell";
        $appEmail = "info@nortwell.pt";

        $FromVariable = "mail@nortwell.pt";
        $FromVariableName = $appName;
        $toVariable = $appEmail;
        $toVariableName = "info@nortwell.pt";


        Mail::send('mailTheme', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName,$email,$name){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->replyTo($email, $name)->subject($subject);
        });
    }
}
