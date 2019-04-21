<?php

namespace App\Http\Controllers\Pc;

use Route,Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Pc\Controller as BaseController;
use App\Models\Level;
use App\Models\Question;
use App\Models\Option;
use App\Models\UserAnswer;

class AnswerController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware("auth:user.web");
    }

    public function submitOption(Request $request)
    {
        $option_id = $request->input('option_id');
        $option = Option::where('id',$option_id)->first();
        $user_id = Auth::user()->id;
        UserAnswer::create([
            'user_id' => $user_id,
            'question_id' => $option->question_id,
            'option_id' => $option_id,
        ]);
        return $this->response->message(trans('messages.submit_success'))
            ->status("success")
            ->code(200)
            ->url(url('/'))
            ->redirect();
    }

    public function submitContent(Request $request)
    {
        $question_id = $request->input('question_id');
        $user_id = Auth::user()->id;
        UserAnswer::create([
            'user_id' => $user_id,
            'question_id' => $question_id,
            'content' => $request->input('content'),
        ]);
        return $this->response->message(trans('messages.submit_success'))
            ->status("success")
            ->code(200)
            ->url(url('/'))
            ->redirect();
    }
}