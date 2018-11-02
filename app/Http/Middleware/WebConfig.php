<?php

namespace App\Http\Middleware;

use App\Laraption;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class WebConfig
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $sites = Laraption::where('key','REGEXP','site.')->get();
        foreach ($sites as $site){
            Config::set($site->key,$site->value);
        }


        if(Auth::check() && Auth::id()){
            $userid = Auth::id();
            $confs = Laraption::where('key','REGEXP','user.id.'.$userid)->get();
            foreach ($confs as $conf){
                Config::set(str_replace('.id.'.$userid,'',$conf->key),$conf->value);
            }
        }

        $mailchimps = Laraption::where('key','REGEXP','newsletter.')->get();

        foreach ($mailchimps as $mailchimp){
            Config::set($mailchimp->key,$mailchimp->value);
        }
        //var_dump(\config('mailchimp.apikey'));
        //var_dump(\config('mailchimp.listid'));
        return $next($request);
    }
}
