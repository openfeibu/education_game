<?php

namespace App\Http\Controllers\Pc;

use Route,Auth;
use Illuminate\Http\Request;
use App\Models\LevelOneVideo;
use App\Models\User;
use App\Models\UserAnswer;
use App\Models\Question;
use App\Models\UserLevelOneVideoTolerateGrade;
use App\Models\UserLevelOneVideoCategory;
use App\Models\UserLevelOneVideoCategoryNoticeGrade;
use App\Http\Controllers\Pc\Controller as BaseController;


class LevelOneController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
//        $this->middleware("auth:user.web");
//        $this->user = Auth::user();
        $this->user = User::where('id',10)->first();
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
        $user_id = $this->user->id;

        $user_grade = UserLevelOneVideoTolerateGrade::where('user_id',$user_id)->where('video_id',$video->id)->first();

        $last_level_question = Question::where('level_id',1)->orderBy('id','desc')->first();

        $last_level_question_user_answer = UserAnswer::where('user_id',$this->user->id)->where('level_id',1)->where('question_id',$last_level_question->id)->orderBy('id','desc')->first();

        if(!$last_level_question_user_answer)
        {
            UserLevelOneVideoTolerateGrade::create([
                'user_id' => $user_id,
                'video_id' => $video->id,
                'grade' => $grade
            ]);
        }else{
            $last_user_grade = UserLevelOneVideoTolerateGrade::where('user_id',$user_id)->where('video_id',$video->id)->where('created_at','>',$last_level_question_user_answer->created_at)->first();

            if($last_user_grade)
            {
                UserLevelOneVideoTolerateGrade::where('id',$last_user_grade->id)
                    ->update([
                        'video_id' => $video->id,
                        'grade' => $grade
                    ]);
            }else{
                UserLevelOneVideoTolerateGrade::create([
                    'user_id' => $user_id,
                    'video_id' => $video->id,
                    'grade' => $grade
                ]);
            }
        }

        /*
        if($user_grade)
        {
            UserLevelOneVideoTolerateGrade::where('id',$user_grade->id)
                ->update([
                    'video_id' => $video->id,
                    'grade' => $grade
                ]);
        }else{
            UserLevelOneVideoTolerateGrade::create([
                'user_id' => $user_id,
                'video_id' => $video->id,
                'grade' => $grade
            ]);
        }
        */
        return $this->response->message(trans('messages.submit_success'))
            ->status("success")
            ->code(200)
            ->url(url('/'))
            ->redirect();
    }

    public function submitVideoCategory(Request $request)
    {
        $request_data = $request->data;

        if(!is_array($request_data))
        {
            $request_data = json_decode($request_data,true);
        }
//        $request_data = [
//            'a1' => 1,
//            'a2' => 3
//        ];
        $video_category_data = [];
        $i = 0;

        $last_level_question = Question::where('level_id',1)->orderBy('id','desc')->first();

        $last_level_question_user_answer = UserAnswer::where('user_id',$this->user->id)->where('level_id',1)->where('question_id',$last_level_question->id)->orderBy('id','desc')->first();


        foreach ($request_data as $key => $val)
        {
            $i++;
            // $video_category_data[$val][] = $key;
            $video_category_data[$i] = [
                'user_id' => $this->user->id,
                'video_id' => $key,
                'category_id' => $val
            ];
            $video = LevelOneVideo::where('slug',$key)->first();

            if(!$last_level_question_user_answer)
            {
                UserLevelOneVideoCategory::create([
                    'user_id' => $this->user->id,
                    'video_id' => $video->id,
                    'category_id' => $val
                ]);
            }else{
                $last_user_category = UserLevelOneVideoCategory::where('user_id',$this->user->id)->where('video_id',$video->id)->where('created_at','>',$last_level_question_user_answer->created_at)->first();

                if($last_user_category)
                {
                    UserLevelOneVideoCategory::where('id',$last_user_category->id)->update([
                        'category_id' => $val
                    ]);
                }else{
                    UserLevelOneVideoCategory::create([
                        'user_id' => $this->user->id,
                        'video_id' => $video->id,
                        'category_id' => $val
                    ]);
                }
            }
            /*
            $user_video_category = UserLevelOneVideoCategory::where('video_id',$video->id)->where('user_id',$this->user->id)->first();
            if($user_video_category)
            {
                UserLevelOneVideoCategory::where('id',$user_video_category->id)->update([
                    'category_id' => $val
                ]);
            }else{
                UserLevelOneVideoCategory::create([
                    'user_id' => $this->user->id,
                    'video_id' => $video->id,
                    'category_id' => $val
                ]);
            }
            */
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

        $user_id = $this->user->id;

        $user_grade = UserLevelOneVideoCategoryNoticeGrade::where('user_id',$user_id)->where('category_id',$category_id)->first();

        $last_level_question = Question::where('level_id',1)->orderBy('id','desc')->first();

        $last_level_question_user_answer = UserAnswer::where('user_id',$this->user->id)->where('level_id',1)->where('question_id',$last_level_question->id)->orderBy('id','desc')->first();

        if(!$last_level_question_user_answer)
        {
            UserLevelOneVideoCategoryNoticeGrade::create([
                'user_id' => $user_id,
                'category_id' => $category_id,
                'grade' => $grade
            ]);
        }else{
            $last_user_grade = UserLevelOneVideoCategoryNoticeGrade::where('user_id',$user_id)->where('category_id',$category_id)->where('created_at','>',$last_level_question_user_answer->created_at)->first();

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
                    'grade' => $grade
                ]);
            }
        }
        /*
        if($user_grade)
        {
            UserLevelOneVideoCategoryNoticeGrade::where('id',$user_grade->id)
                ->update([
                    'category_id' => $category_id,
                    'grade' => $grade
                ]);
        }else{
            UserLevelOneVideoCategoryNoticeGrade::create([
                'user_id' => $user_id,
                'category_id' => $category_id,
                'grade' => $grade
            ]);
        }
        */
        return $this->response->message(trans('messages.submit_success'))
            ->status("success")
            ->code(200)
            ->url(url('/'))
            ->redirect();
    }

}
