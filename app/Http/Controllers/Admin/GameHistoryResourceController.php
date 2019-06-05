<?php

namespace App\Http\Controllers\Admin;

use App\Models\UserLevelOneVideoCategory;
use App\Models\UserLevelOneVideoTolerateGrade;
use DB;
use App\Http\Controllers\Admin\ResourceController as BaseController;
use Illuminate\Http\Request;
use App\Models\UserAnswer;
use App\Models\Option;
use App\Models\GameHistory;

class GameHistoryResourceController extends BaseController
{

    /**
     * Initialize page resource controller.
     *
     *
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function index(Request $request)
    {
        $limit = $request->input('limit',config('app.limit'));

        $search = $request->input('search',[]);
        $user_id = $request->input('user_id','');

        if ($this->response->typeIs('json')) {
            $game_histories = GameHistory::select('game_histories.id','game_histories.user_id','game_histories.level_id','game_histories.created_at','levels.level_name','users.name as username')
                ->join('users', 'users.id', '=', 'game_histories.user_id')
                ->join('levels','levels.id','=','game_histories.level_id');
            if($user_id)
            {
                $game_histories = $game_histories->where('.game_histories.user_id',$user_id);
            }
            $game_histories = $game_histories->orderBy('game_histories.id','desc')
                ->paginate($limit);
            $data = $game_histories ? $game_histories->toArray()['data'] : [];

            return $this->response
                ->success()
                ->count($game_histories->total())
                ->data($data)
                ->output();
        }

        return $this->response->title(trans('app.admin.panel'))
            ->view('game_history.index')
            ->output();
    }
    public function show(Request $request,GameHistory $game_history)
    {
        $level_id = $game_history->level_id;
        $user = $game_history->user;
        switch ($level_id)
        {
            case '1' :
                $user_level_one_video_tolerate_grades = UserLevelOneVideoTolerateGrade::rightJoin('level_one_videos','level_one_videos.id','=','user_level_one_video_tolerate_grades.video_id')
                    ->select('level_one_videos.video_path','user_level_one_video_tolerate_grades.grade')
                    ->where('user_id',$game_history->user_id)
                    ->where('history_id',$game_history->id)
                    ->orderBy('video_id','asc')
                    ->get()
                    ->toArray();

                foreach ($user_level_one_video_tolerate_grades as $key => $user_level_one_video_tolerate_grade)
                {
                    $user_level_one_video_tolerate_grades[$key]['video_path'] = config('common.video_path').'/'.$user_level_one_video_tolerate_grade['video_path'];
                    $user_level_one_video_tolerate_grades[$key]['video_thumb_path'] = config('common.video_path').'/'.$user_level_one_video_tolerate_grade['video_thumb_path'];
                }

                $user_level_one_video_categories = UserLevelOneVideoCategory::rightJoin('level_one_videos','level_one_videos.id','=','user_level_one_video_categories.video_id')
                    ->where('user_level_one_video_categories.user_id',$game_history->user_id)
                    ->where('user_level_one_video_categories.history_id',$game_history->id)
                    ->get();
                break;
        }
    }
}