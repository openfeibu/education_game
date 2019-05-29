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
use App\Http\Controllers\Pc\Controller as BaseController;


class LevelOneController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
       // $this->middleware("auth:user.web");
    }

    public function submitTolerateGrade(Request $request)
    {
        $slug = $request->slug;
        $grade = $request->grade;

        $video = LevelOneVideo::where('slug',$slug)->first();
        if(!$video)
        {
            return $this->response->message(trans('messages.video_not_exist'))
                ->status("error")
                ->code(400)
                ->url(url('/'))
                ->redirect();
        }

        $user_id = Auth::user()->id;

        $last_level_question = Question::where('level_id',1)->orderBy('id','desc')->first();

        $last_level_question_user_answer = UserAnswer::where('user_id',$user_id)->where('level_id',1)->where('question_id',$last_level_question->id)->orderBy('id','desc')->first();

        $last_user_grade = UserLevelOneVideoTolerateGrade::where('user_id',$user_id)->where('video_id',$video->id);

        $history_id = UserLevelOneVideoTolerateGrade::where('user_id',$user_id);
        if($last_level_question_user_answer)
        {
            $last_user_grade = $last_user_grade->where('created_at','>',$last_level_question_user_answer->created_at);
            $history_id = $history_id->where('created_at','>',$last_level_question_user_answer->created_at);
        }
        $last_user_grade = $last_user_grade->first();
        $history_id = $history_id->value('history_id');

        if($last_user_grade)
        {
            UserLevelOneVideoTolerateGrade::where('id',$last_user_grade->id)
                ->update([
                    'grade' => $grade
                ]);
        }else{
            if(!$history_id)
            {
                $game_history = GameHistory::create([
                    'user_id' => $user_id,
                    'level_id' => 1,
                ]);
                $history_id = $game_history->id;
            }

            UserLevelOneVideoTolerateGrade::create([
                'user_id' => $user_id,
                'history_id' => $history_id,
                'video_id' => $video->id,
                'grade' => $grade
            ]);
        }


        return $this->response->message(trans('messages.submit_success'))
            ->status("success")
            ->code(200)
            ->url(url('/'))
            ->redirect();
    }

    public function submitVideoCategory(Request $request)
    {
        $request_data = $request->data;
        $user_id = Auth::user()->id;
        if(!is_array($request_data))
        {
            $request_data = json_decode($request_data,true);
        }

        $video_category_data = [];
        $i = 0;

        $history_id = GameHistory::where('level_id',1)->where('user_id',$user_id)->orderBy('id','desc')->value('id');

        $last_level_question = Question::where('level_id',1)->orderBy('id','desc')->first();

        $last_level_question_user_answer = UserAnswer::where('user_id',$user_id)->where('level_id',1)->where('question_id',$last_level_question->id)->orderBy('id','desc')->first();


        foreach ($request_data as $key => $val)
        {
            $i++;
            // $video_category_data[$val][] = $key;
            $video_category_data[$i] = [
                'user_id' => $user_id,
                'video_id' => $key,
                'category_id' => $val
            ];
            $video = LevelOneVideo::where('slug',$key)->first();

            $last_user_category = UserLevelOneVideoCategory::where('user_id',$user_id)->where('video_id',$video->id);

            if($last_level_question_user_answer)
            {
                $last_user_category = $last_user_category->where('created_at','>',$last_level_question_user_answer->created_at);
            }
            $last_user_category = $last_user_category ->first();

            if($last_user_category)
            {
                UserLevelOneVideoCategory::where('id',$last_user_category->id)->update([
                    'category_id' => $val
                ]);
            }else{
                UserLevelOneVideoCategory::create([
                    'user_id' => $user_id,
                    'video_id' => $video->id,
                    'history_id' => $history_id,
                    'category_id' => $val
                ]);
            }
        }

        return $this->response->message(trans('messages.submit_success'))
            ->status("success")
            ->code(200)
            ->url(url('/'))
            ->redirect();

    }
    public function submitNoticeGrade(Request $request)
    {
        $category_id = $request->category_id;
        $grade =  $request->grade;

        $user_id = Auth::user()->id;

        $history_id = GameHistory::where('level_id',1)->where('user_id',$user_id)->orderBy('id','desc')->value('id');

        $last_level_question = Question::where('level_id',1)->orderBy('id','desc')->first();

        $last_level_question_user_answer = UserAnswer::where('user_id',$user_id)->where('level_id',1)->where('question_id',$last_level_question->id)->orderBy('id','desc')->first();

        $last_user_grade = UserLevelOneVideoCategoryNoticeGrade::where('user_id',$user_id)->where('category_id',$category_id);

        if($last_level_question_user_answer)
        {
            $last_user_grade = $last_user_grade->where('created_at','>',$last_level_question_user_answer->created_at);
        }
        $last_user_grade = $last_user_grade->first();

        if($last_user_grade)
        {
            UserLevelOneVideoCategoryNoticeGrade::where('id',$last_user_grade->id)
                ->update([
                    'category_id' => $category_id,
                    'grade' => $grade
                ]);
        }else{
            UserLevelOneVideoCategoryNoticeGrade::create([
                'user_id' => $user_id,
                'category_id' => $category_id,
                'history_id' => $history_id,
                'grade' => $grade
            ]);
        }

        return $this->response->message(trans('messages.submit_success'))
            ->status("success")
            ->code(200)
            ->url(url('/'))
            ->redirect();
    }
    public function getUserTolerateGrade(Request $request)
    {
        $user_id = 10;

        $last_level_question = Question::where('level_id',1)->orderBy('id','desc')->first();

        $last_level_question_user_answer = UserAnswer::where('user_id',$user_id)->where('level_id',1)->where('question_id',$last_level_question->id)->orderBy('id','desc')->first();


        $history_id = UserLevelOneVideoTolerateGrade::where('user_id',$user_id);
        if($last_level_question_user_answer)
        {
            $history_id = $history_id->where('created_at','>',$last_level_question_user_answer->created_at);
        }
        $history_id = $history_id->orderBy('id','desc')->value('history_id');

        $data = [];

        if($history_id)
        {
            $grades = UserLevelOneVideoTolerateGrade::join('level_one_videos','level_one_videos.id','=','user_level_one_video_tolerate_grades.video_id')
                ->where('user_level_one_video_tolerate_grades.user_id',$user_id)
                ->where('user_level_one_video_tolerate_grades.history_id',$history_id)
                ->select('level_one_videos.slug','user_level_one_video_tolerate_grades.grade')
                ->orderBy('user_level_one_video_tolerate_grades.video_id','asc')
                ->get();
            foreach ($grades as $key => $val)
            {
                $data[$val['slug']] = $val['grade'];
            }
        }

        return $this->response
            ->data($data)
            ->status("success")
            ->code(200)
            ->url(url('/'))
            ->redirect();
    }
    public function getUserVideoParentCategory(Request $request)
    {
        $user_id = Auth::user()->id;
        $history_id = GameHistory::where('level_id',1)->where('user_id',$user_id)->orderBy('id','desc')->value('id');

        $categories = UserLevelOneVideoCategory::join('level_one_videos','level_one_videos.id','=','user_level_one_video_categories.video_id')
            ->join('level_one_video_categories','level_one_video_categories.id','=','user_level_one_video_categories.category_id')
            ->where('user_level_one_video_categories.user_id',$user_id)
            ->where('user_level_one_video_categories.history_id',$history_id)
            ->orderBy('level_one_videos.id','asc')
            ->select('level_one_videos.slug','user_level_one_video_categories.category_id','level_one_video_categories.parent_id')
            ->get()
            ->toArray();
        $data = [];
        foreach ($categories as $key => $val)
        {
            $data[$val['slug']] = $val['parent_id'] > 0 ? $val['parent_id'] : $val['category_id'];
        }

        return $this->response
            ->data($data)
            ->status("success")
            ->code(200)
            ->url(url('/'))
            ->redirect();
    }

    public function getUserVideoChildCategory(Request $request)
    {
        $user_id = Auth::user()->id;
        $history_id = GameHistory::where('level_id',1)->where('user_id',$user_id)->orderBy('id','desc')->value('id');

        $categories = UserLevelOneVideoCategory::join('level_one_videos','level_one_videos.id','=','user_level_one_video_categories.video_id')
            ->where('user_level_one_video_categories.user_id',$user_id)
            ->where('user_level_one_video_categories.history_id',$history_id)
            ->orderBy('level_one_videos.id','asc')
            ->select('level_one_videos.slug','user_level_one_video_categories.category_id')
            ->get()
            ->toArray();
        $data = [];
        foreach ($categories as $key => $val)
        {
            $data[$val['slug']] = $val['category_id'];
        }

        return $this->response
            ->data($data)
            ->status("success")
            ->code(200)
            ->url(url('/'))
            ->redirect();
    }
}
