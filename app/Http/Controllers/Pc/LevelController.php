<?php

namespace App\Http\Controllers\Pc;

use Route,Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Pc\Controller as BaseController;


class LevelController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware("auth:user.web");
    }

    public function levelOne()
    {
        return $this->response->title('')
            ->view('level.level_one')
            ->output();
    }

    public function levelTwo()
    {
        return $this->response->title('')
            ->view('level.level_two')
            ->output();
    }

    public function levelThree()
    {
        return $this->response->title('')
            ->view('level.level_three')
            ->output();
    }
    public function levelFour()
    {
        return $this->response->title('')
            ->view('level.level_four')
            ->output();
    }
    public function levelFive()
    {
        return $this->response->title('')
            ->view('level.level_five')
            ->output();
    }

}
