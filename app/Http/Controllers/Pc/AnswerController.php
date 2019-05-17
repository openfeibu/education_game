<?php

namespace App\Http\Controllers\Pc;

use Route,Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Pc\Controller as BaseController;
use App\Models\Level;
use App\Models\Question;
use App\Models\Option;
use App\Models\User;
use App\Models\UserAnswer;

class AnswerController extends BaseController
{
    public function __construct()
    {
        //        $this->middleware("auth:user.web");
//        $this->user = Auth::user();
        $this->user = User::where('id',10)->first();
    }

    public function submitOption(Request $request)
    {
        $option_id = $request->input('option_id',0);
        $question_id = $request->input('question_id',0);
        $content = $request->input('content','');

        $user_id = $this->user->id;
        UserAnswer::create([
            'user_id' => $user_id,
            'question_id' => $question_id,
            'option_id' => $option_id,
            'content' => $content
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
        $user_id = $this->user->id;
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