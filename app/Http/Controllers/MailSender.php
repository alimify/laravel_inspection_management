<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class MailSender extends Controller
{
    public static function send($view,$data){

      Mail::send($view,$data,function ($mail) use ($data){
          $mail->from(Config::get('site.email'),Config::get('site.emailname'));
          $mail->to($data['to']);
          $mail->subject($data['subject']);
          if($data['file']){
              $mail->attach($data['file']);
          }
      });

    }
}
