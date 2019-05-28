<?php

namespace App\Http\Controllers\Pc;

use Route,Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Pc\Controller as BaseController;
use App\Models\Level;
use App\Models\Question;
use App\Models\Option;
use App\Models\User;
use App\Models\GameHistory;
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
        $option_id = $request->input('option_id',0);
        $question_id = $request->input('question_id',0);
        $content = $request->input('content','');

        $question = Question::where('id',$question_id)->first();

        if($question->level_id == 1)
        {
            $history_id = GameHistory::where('level_id',1)->where('user_id',Auth::user()->id)->orderBy('id','desc')->value('id');
            UserAnswer::create([
                'user_id' => Auth::user()->id,
                'level_id' => $question->level_id,
                'history_id' => $history_id,
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


        //关卡最后一个问题：用于判断是否完成了一个关卡
        $last_level_question = Question::where('level_id',$question->level_id)->orderBy('id','desc')->first();

        $last_level_user_answer = UserAnswer::where('user_id',Auth::user()->id)->where('level_id',$question->level_id)->orderBy('id','desc')->first();

        //关卡玩记录最后一次答题的question_id  = 关卡最后一道问题的答题，重新创建一轮新的答题
        if(isset($last_level_user_answer) && $last_level_user_answer && $last_level_user_answer->question_id == $last_level_question->id)
        {
            $game_history = GameHistory::create([
                'user_id' => Auth::user()->id,
                'level_id' => $question->level_id,
            ]);

            $history_id = $game_history->id;

            UserAnswer::create([
                'user_id' => Auth::user()->id,
                'level_id' => $question->level_id,
                'history_id' => $history_id,
                'question_id' => $question_id,
                'option_id' => $option_id,
                'content' => $content
            ]);
        }else{

            $last_level_question_user_answer = UserAnswer::where('user_id',Auth::user()->id)->where('level_id',$question->level_id)->where('question_id',$last_level_question->id)->orderBy('id','desc')->first();

            $user_answer = UserAnswer::where('user_id',Auth::user()->id)->where('question_id',$question_id);

            $history_id = UserAnswer::where('user_id',Auth::user()->id)->where('level_id',$question->level_id);

            if($last_level_question_user_answer)
            {
                $user_answer = $user_answer->where('id','>',$last_level_question_user_answer->id);
                $history_id = $history_id->where('id','>',$last_level_question_user_answer->id);
            }
            $user_answer = $user_answer->orderBy('id','desc')->first();
            $history_id = $history_id->orderBy('id','desc')->value('history_id');
            if(!$history_id)
            {
                $game_history = GameHistory::create([
                    'user_id' => Auth::user()->id,
                    'level_id' => $question->level_id,
                ]);
                $history_id = $game_history->id;
            }
            if($user_answer){
                UserAnswer::where('id',$user_answer->id)->update([
                    'option_id' => $option_id,
                    'content' => $content
                ]);
            }else{
                UserAnswer::create([
                    'user_id' => Auth::user()->id,
                    'level_id' => $question->level_id,
                    'history_id' => $history_id,
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