<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSender extends Controller
{
    public static function send($view,$data){

      Mail::send($view,$data,function ($mail) use ($data){
          $mail->from($data['from'],$data['fromname']);
          $mail->to($data['to']);
          $mail->subject($data['subject']);
      });

    }
}
