<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Http\Controllers\Admin\ResourceController as BaseController;
use Illuminate\Http\Request;
use App\Models\UserAnswer;
use App\Models\Option;

/**
 * Resource controller class for page.
 */
class UserAnswerResourceController extends BaseController
{

    /**
     * Initialize page resource controller.
     *
     * @param type NavRepositoryInterface $nav
     *
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function index(Request $request)
    {
        $limit = $request->input('limit',config('app.limit'));
        $user_answers = UserAnswer::select(DB::raw('user_answers.id,user_answers.user_id,user_answers.question_id,user_answers.option_id,user_answers.content as answer_content,user_answers.created_at,users.id as user_id,users.name as user_name,questions.content as question_content,questions.level_id,levels.level_name'))
            ->join('users', 'users.id', '=', 'user_answers.user_id')
            ->join('questions','questions.id','=','user_answers.question_id')
            ->join('levels','levels.id','=','questions.level_id')
            ->orderBy('users.id','asc')
            ->orderBy('questions.id','asc')
            ->paginate($limit);

        foreach ($user_answers as $key => $user_answer)
        {
            if($user_answer->option_id)
            {
                $user_answer->answer_content = Option::where('id',$user_answer->option_id)->value('content');
            }
        }
        if ($this->response->typeIs('json')) {
            $data = $user_answers ? $user_answers->toArray()['data'] : [];
            return $this->response
                ->success()
                ->count($user_answers->total())
                ->data($data)
                ->output();
        }

        return $this->response->title(trans('app.admin.panel'))
            ->view('user_answer.index')
            ->data(compact('products','categories','category_id'))
            ->output();
    }
}