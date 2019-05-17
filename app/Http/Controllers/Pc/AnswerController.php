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

        $question = Question::where('id',$question_id)->first();

        //关卡最后一个问题：用于判断是否完成了一个关卡
        $last_level_question = Question::where('level_id',$question->level_id)->orderBy('id','desc')->first();

        $last_level_user_answer = UserAnswer::where('user_id',$this->user->id)->where('level_id',$question->level_id)->orderBy('id','desc')->first();

        $last_level_question_user_answer = UserAnswer::where('user_id',$this->user->id)->where('level_id',$question->level_id)->where('question_id',$last_level_question->id)->orderBy('id','desc')->first();

        if(isset($last_level_user_answer) && $last_level_user_answer && $last_level_user_answer->question_id == $last_level_question->id)
        {
            UserAnswer::create([
                'user_id' => $this->user->id,
                'level_id' => $question->level_id,
                'question_id' => $question_id,
                'option_id' => $option_id,
                'content' => $content
            ]);
        }else{

            $user_answer = UserAnswer::where('user_id',$this->user->id)->where('question_id',$question_id)->where('id','>','');
            if($last_level_question_user_answer)
            {
                $user_answer = $user_answer->where('id','>',$last_level_question_user_answer->id);
            }
            $user_answer = $user_answer->orderBy('id','desc')->first();

            if($user_answer){
                UserAnswer::where('id',$user_answer->id)->update([
                    'option_id' => $option_id,
                    'content' => $content
                ]);
            }else{
                UserAnswer::create([
                    'user_id' => $this->user->id,
                    'level_id' => $question->level_id,
                    'question_id' => $question_id,
                    'option_id' => $option_id,
                    'content' => $content
                ]);
            }
        }

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