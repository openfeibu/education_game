<?php

namespace App\Http\Controllers\Pc;

use Route,Auth;
use Illuminate\Http\Request;
use App\Models\LevelOneVideo;
use App\Models\User;
use App\Models\UserAnswer;
use App\Models\Question;
use App\Models\GameHistory;
use App\Models\UserLevelOneVideoTolerateGrade;
use App\Models\UserLevelOneVideoCategory;
use App\Models\UserLevelOneVideoCategoryNoticeGrade;
use App\Models\UserLevelFourStrategyLike;
use App\Http\Controllers\Pc\Controller as BaseController;


class LevelFourController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->level_id = 4;
        $this->middleware("auth:user.web");
    }

   public function getStrategies()
   {
       $question_id = 6;
       $strategies = UserAnswer::join('users','users.id','=','user_answers.user_id')
           ->select('users.name','user_answers.content')
           ->where('user_answers.level_id',$this->level_id)
           ->where('user_answers.question_id',$question_id)
           ->whereNotNull('user_answers.content')
           ->where('user_id','<>',Auth::user()->id)
           ->orderBy('user_answers.id','desc')
           ->paginate(10);
       $data =  $strategies ? $strategies->toArray()['data'] : [];
       return [
           'code' => 200,
           'data' => $data,
       ];
   }
}
