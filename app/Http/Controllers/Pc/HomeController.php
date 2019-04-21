<?php

namespace App\Http\Controllers\Pc;

use Route,Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Pc\Controller as BaseController;


class HomeController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware("auth:user.web",['except' => ['home','editLanguage']]);
    }
    /**
     * Show dashboard for each user.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return $this->response->title('')
            ->view('home')
            ->output();
    }

    public function editLanguage(Request $request){

        if($request->ajax()){

            $data = $request->all();

            App::setLocale($data['lang']);

            $request->session()->put('lang',$data['lang']);

            if(Auth::user())
            {
                Auth::user()->update(['lang' => $data['lang']]);
            }

            return $this->response->message(trans('change.lang_success'))
                ->status("success")
                ->code(200)
                ->url(url('/'))
                ->redirect();

        }

    }
    public function levels()
    {
        return $this->response->title('')
            ->view('levels')
            ->output();
    }

}
