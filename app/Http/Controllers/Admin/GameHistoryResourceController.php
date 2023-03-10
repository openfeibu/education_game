<?php

namespace App\Http\Controllers\Admin;

use App\Models\LevelFourStrategy;
use App\Models\UserLevelFourStrategyLike;
use App\Models\UserLevelOneVideoCategoryNoticeGrade;
use DB;
use App\Http\Controllers\Admin\ResourceController as BaseController;
use Illuminate\Http\Request;
use App\Models\LevelOneVideoCategory;
use App\Models\Question;
use App\Models\UserLevelOneVideoCategory;
use App\Models\UserLevelOneVideoTolerateGrade;
use App\Models\UserAnswer;
use App\Models\GameHistory;
use App\Models\Option;


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
                $game_histories = $game_histories->where('game_histories.user_id',$user_id);
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

        return $this->response->title(trans('game.name'))
            ->data(compact('user_id'))
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
                    ->select('level_one_videos.video_path','level_one_videos.video_thumb_path','user_level_one_video_tolerate_grades.grade')
                    ->where('user_id',$game_history->user_id)
                    ->where('history_id',$game_history->id)
                    ->orderBy('video_id','asc')
                    ->get()
                    ->toArray();


                $user_parent_video_category_arr = [];
                $user_child_video_category_arr = [];
                $parent_video_categories = LevelOneVideoCategory::where('parent_id',0)->get()->toArray();
                $i = 0;
                foreach ($parent_video_categories as $key => $parent_video_category)
                {
                    $user_parent_video_category_arr[$i] = $parent_video_category;

                    $children_video_category_ids = LevelOneVideoCategory::where('parent_id',$parent_video_category['id'])->pluck('id')->toArray();
                    $ids = $children_video_category_ids;
                    array_push($ids,$parent_video_category['id']);

                    $user_level_one_video_categories = UserLevelOneVideoCategory::rightJoin('level_one_videos','level_one_videos.id','=','user_level_one_video_categories.video_id')
                        ->join('level_one_video_categories','level_one_video_categories.id','=','user_level_one_video_categories.category_id')
                        ->select('level_one_videos.video_path','level_one_videos.video_thumb_path','user_level_one_video_categories.category_id','level_one_video_categories.name')
                        ->where('user_level_one_video_categories.user_id',$game_history->user_id)
                        ->where('user_level_one_video_categories.history_id',$game_history->id)
                        ->whereIn('level_one_video_categories.id',$ids)
                        ->orderBy('video_id','asc')
                        ->get()
                        ->toArray();

                    $user_parent_video_category_arr[$i]['videos'] = $user_level_one_video_categories;

                    foreach ($children_video_category_ids as $key => $children_video_category_id)
                    {
                        $user_child_video_category_arr[$children_video_category_id] = LevelOneVideoCategory::where('id',$children_video_category_id)->first()->toArray();
                        $user_child_video_category_arr[$children_video_category_id]['videos'] = UserLevelOneVideoCategory::rightJoin('level_one_videos','level_one_videos.id','=','user_level_one_video_categories.video_id')
                            ->join('level_one_video_categories','level_one_video_categories.id','=','user_level_one_video_categories.category_id')
                            ->select('level_one_videos.video_path','level_one_videos.video_thumb_path','user_level_one_video_categories.category_id','level_one_video_categories.name')
                            ->where('user_level_one_video_categories.user_id',$game_history->user_id)
                            ->where('user_level_one_video_categories.history_id',$game_history->id)
                            ->where('level_one_video_categories.id',$children_video_category_id)
                            ->orderBy('video_id','asc')
                            ->get()
                            ->toArray();
                    }
                    $i++;
                }

                $user_level_one_video_category_notice_grades = UserLevelOneVideoCategoryNoticeGrade::join('level_one_video_categories','level_one_video_categories.id','=','user_level_one_video_category_notice_grades.category_id')
                    ->select('user_level_one_video_category_notice_grades.category_id','user_level_one_video_category_notice_grades.grade','level_one_video_categories.name')
                    ->where('user_level_one_video_category_notice_grades.user_id',$game_history->user_id)
                    ->where('user_level_one_video_category_notice_grades.history_id',$game_history->id)
                    ->orderBy('level_one_video_categories.id','asc')
                    ->get()
                    ->toArray();


                $user_answers = [];
                $questions = Question::where('level_id',$level_id)->orderBy('order','asc')->orderBy('id','asc')->get()->toArray();
                foreach ($questions as $key => $question)
                {
                    $user_answers[$key]['question_id'] = $question['id'];
                    $user_answer = UserAnswer::where('user_id',$game_history->user_id)->where('history_id',$game_history->id)->where('question_id',$question['id'])->first();

                    $user_answers[$key]['answer_content'] = $user_answer['content'];
                    $user_answers[$key]['question_content'] = $question['content'];

                    $options = Option::where('question_id',$question['id'])->get()->toArray();
                    $i = 0;
                    foreach ($options as $option_key => $option)
                    {
                        $i++;
                        if($user_answer['option_id'] == $option['id'])
                        {
                            $options[$option_key]['selected_class'] = 'option_selected';
                        }else{
                            $options[$option_key]['selected_class'] = '';
                        }
                        $options[$option_key]['letter'] = config('common.letter.'.$i);
                    }
                    $user_answers[$key]['options'] = $options;
                }
                $data = compact('user_answers','user_level_one_video_tolerate_grades','user_parent_video_category_arr','user_child_video_category_arr','user_level_one_video_category_notice_grades');
                break;
            case "4":
                $user_answers = [];
                $questions = Question::where('level_id',$level_id)->orderBy('order','asc')->orderBy('id','asc')->get()->toArray();
                foreach ($questions as $key => $question)
                {
                    $user_answers[$key]['question_id'] = $question['id'];
                    $user_answer = UserAnswer::where('user_id',$game_history->user_id)->where('history_id',$game_history->id)->where('question_id',$question['id'])->first();
                    $user_answers[$key]['answer_content'] = $user_answer['content'];
                    $user_answers[$key]['question_content'] = $question['content'];

                    $options = Option::where('question_id',$question['id'])->get()->toArray();
                    $i = 0;
                    foreach ($options as $option_key => $option)
                    {
                        $i++;
                        if($user_answer['option_id'] == $option['id'])
                        {
                            $options[$option_key]['selected_class'] = 'option_selected';
                        }else{
                            $options[$option_key]['selected_class'] = '';
                        }
                        $options[$option_key]['letter'] = config('common.letter.'.$i);
                    }
                    $user_answers[$key]['options'] = $options;
                }

                $user_level_four_strategy_likes = UserLevelFourStrategyLike::rightJoin('level_four_strategies','level_four_strategies.id','=','user_level_four_strategy_like.strategy_id')->where('user_level_four_strategy_like.user_id',$game_history->user_id)->where('user_level_four_strategy_like.history_id',$game_history->id)->select('level_four_strategies.content')->get()->toArray();


                $level_four_strategies = LevelFourStrategy::orderBy('id','asc')->get()->toArray();
                foreach ($level_four_strategies as $key => $strategy)
                {
                    $user_level_four_strategy_like= UserLevelFourStrategyLike::where('user_id',$game_history->user_id)->where('history_id',$game_history->id)->where('strategy_id',$strategy['id'])->first();
                    if($user_level_four_strategy_like)
                    {
                        $level_four_strategies[$key]['selected_class'] = 'option_selected';
                    }else{
                        $level_four_strategies[$key]['selected_class'] = '';
                    }
                }
                $data = compact('user_answers','user_level_four_strategy_likes','level_four_strategies');

                break;
            default:
                $user_answers = [];
                $questions = Question::where('level_id',$level_id)->orderBy('order','asc')->orderBy('id','asc')->get()->toArray();
                foreach ($questions as $key => $question)
                {
                    $user_answers[$key]['question_id'] = $question['id'];
                    $user_answer = UserAnswer::where('user_id',$game_history->user_id)->where('history_id',$game_history->id)->where('question_id',$question['id'])->first();
                    $user_answers[$key]['answer_content'] = $user_answer['content'];
                    $user_answers[$key]['question_content'] = $question['content'];

                    $options = Option::where('question_id',$question['id'])->get()->toArray();
                    $i = 0;
                    foreach ($options as $option_key => $option)
                    {
                        $i++;
                        if($user_answer['option_id'] == $option['id'])
                        {
                            $options[$option_key]['selected_class'] = 'option_selected';
                        }else{
                            $options[$option_key]['selected_class'] = '';
                        }
                        $options[$option_key]['letter'] = config('common.letter.'.$i);
                    }
                    $user_answers[$key]['options'] = $options;
                }
                $data = compact('user_answers');
                break;
        }
        $data['level_id'] = $level_id;
        return $this->response->title(trans('game.name'))
            ->view('game_history.show')
            ->data($data)
            ->output();
    }
}