<?php

namespace App\Http\Middleware;

use Closure,Auth,App;

class language
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

        if($request->input('lang'))
        {
            App::setLocale($request->input('lang'));
            $request->session()->put('lang',$request->input('lang'));
            if(Auth::user())
            {
                Auth::user()->where('id',Auth::user()->id)->update(['lang' => $request->input('lang')]);
            }
        }else if($request->session()->exists("lang")){
            App::setLocale(session("lang"));
        }else{
            if(Auth::user())
            {
                App::setLocale(Auth::user()->lang);
            }
            App::setLocale('zh-hk');
        }

        return $next($request);

    }
}
