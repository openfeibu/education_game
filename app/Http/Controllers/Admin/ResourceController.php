<?php

namespace App\Http\Controllers\Admin;

use App\Models\GameHistory;
use App\Models\User;
use Route;
use App\Http\Controllers\Admin\Controller as BaseController;
use App\Traits\AdminUser\AdminUserPages;
use App\Http\Response\ResourceResponse;
use App\Traits\Theme\ThemeAndViews;
use App\Traits\AdminUser\RoutesAndGuards;

class ResourceController extends BaseController
{
    use AdminUserPages,ThemeAndViews,RoutesAndGuards;

    public function __construct()
    {
        parent::__construct();
        if (!empty(app('auth')->getDefaultDriver())) {
            $this->middleware('auth:' . app('auth')->getDefaultDriver());
           // $this->middleware('role:' . $this->getGuardRoute());
            $this->middleware('permission:' .Route::currentRouteName());
            $this->middleware('active');
        }
        $this->response = app(ResourceResponse::class);
        $this->setTheme();
    }
    /**
     * Show dashboard for each user.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $user_count = User::count();
        $game_count = GameHistory::count();
        $today_active_user_count = GameHistory::where('created_at','>',date('Y-m-d'))->groupBy('user_id')->get()->count();
        $today_game_count = GameHistory::where('created_at','>',date('Y-m-d'))->count();
        return $this->response->title(trans('app.admin.panel'))
            ->data(compact('user_count','game_count','today_active_user_count','today_game_count'))
            ->view('home')
            ->output();
    }
    public function dashboard()
    {
        return $this->response->title('测试')
            ->view('dashboard')
            ->output();
    }
}
