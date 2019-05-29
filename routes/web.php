<?php


// Admin  routes  for user
Route::group([
    'namespace' => 'Admin',
    'prefix' => 'admin'
], function () {
    Auth::routes();
    Route::get('password', 'UserController@getPassword');
    Route::post('password', 'UserController@postPassword');
    Route::get('/', 'ResourceController@home')->name('home');
    Route::get('/dashboard', 'ResourceController@dashboard')->name('dashboard');
    Route::resource('banner', 'BannerResourceController');
    Route::post('/banner/destroyAll', 'BannerResourceController@destroyAll');

    Route::resource('news', 'NewsResourceController');
    Route::post('/news/destroyAll', 'NewsResourceController@destroyAll')->name('news.destroy_all');
    Route::post('/news/updateRecommend', 'NewsResourceController@updateRecommend')->name('news.update_recommend');
    Route::resource('system_page', 'SystemPageResourceController');
    Route::post('/system_page/destroyAll', 'SystemPageResourceController@destroyAll')->name('system_page.destroy_all');
    Route::get('/setting/company', 'SettingResourceController@company')->name('setting.company.index');
    Route::post('/setting/updateCompany', 'SettingResourceController@updateCompany');
    Route::get('/setting/publicityVideo', 'SettingResourceController@publicityVideo')->name('setting.publicity_video.index');
    Route::post('/setting/updatePublicityVideo', 'SettingResourceController@updatePublicityVideo');

    Route::resource('link', 'LinkResourceController');
    Route::post('/link/destroyAll', 'LinkResourceController@destroyAll')->name('link.destroy_all');
    Route::resource('permission', 'PermissionResourceController');
    Route::resource('role', 'RoleResourceController');

    Route::resource('user_answer', 'UserAnswerResourceController');

    Route::group(['prefix' => 'case','as' => 'case.'], function ($router) {
        Route::resource('case', 'CaseResourceController');
        Route::post('/case/destroyAll', 'CaseResourceController@destroyAll')->name('case.destroy_all');
        Route::resource('category', 'CaseCategoryResourceController');
        Route::post('/category/destroyAll', 'CaseCategoryResourceController@destroyAll')->name('category.destroy_all');
    });

    Route::group(['prefix' => 'page','as' => 'page.'], function ($router) {
        Route::resource('page', 'PageResourceController');
        Route::resource('category', 'PageCategoryResourceController');
    });
    Route::group(['prefix' => 'menu'], function ($router) {
        Route::get('index', 'MenuResourceController@index');
    });

    Route::group(['prefix' => 'nav','as' => 'nav.'], function ($router) {
        Route::resource('nav', 'NavResourceController');
        Route::post('/nav/destroyAll', 'NavResourceController@destroyAll')->name('nav.destroy_all');
        Route::resource('category', 'NavCategoryResourceController');
        Route::post('/category/destroyAll', 'NavCategoryResourceController@destroyAll')->name('category.destroy_all');
    });

    Route::post('/upload/{config}/{path?}', 'UploadController@upload')->where('path', '(.*)');

    Route::resource('admin_user', 'AdminUserResourceController');
    Route::post('/admin_user/destroyAll', 'AdminUserResourceController@destroyAll')->name('admin_user.destroy_all');
    Route::resource('user', 'UserResourceController');
    Route::post('/user/destroyAll', 'UserResourceController@destroyAll')->name('user.destroy_all');
    Route::resource('permission', 'PermissionResourceController');
    Route::post('/permission/destroyAll', 'PermissionResourceController@destroyAll')->name('permission.destroy_all');
    Route::resource('role', 'RoleResourceController');
    Route::post('/role/destroyAll', 'RoleResourceController@destroyAll')->name('role.destroy_all');
    Route::get('logout', 'Auth\LoginController@logout');
});
Route::group([
    'namespace' => 'Pc',
    'as' => 'pc.',
], function () {
    Auth::routes();
    Route::get('/','HomeController@home')->name('home');
    Route::get('/levels','HomeController@levels')->name('levels');
    Route::get('/level/1','LevelController@levelOne')->name('level.level_one');
    Route::get('/level/2','LevelController@levelTwo')->name('level.level_two');
    Route::get('/level/3','LevelController@levelThree')->name('level.level_three');
    Route::get('/level/4','LevelController@levelFour')->name('level.level_four');
    Route::get('/level/5','LevelController@levelFive')->name('level.level_five');
    Route::post('/submit_option','AnswerController@submitOption')->name('submit_option');
    Route::post('/submit_content','AnswerController@submitContent')->name('submit_content');

    Route::post('/level_one/submit_tolerate_grade','LevelOneController@submitTolerateGrade')->name('level_one.submit_tolerate_grade');
    Route::post('/level_one/submit_video_category','LevelOneController@submitVideoCategory')->name('level_one.submit_video_category');
    Route::post('/level_one/submit_notice_grade','LevelOneController@submitNoticeGrade')->name('level_one.submit_notice_grade');
    Route::get('/level_one/user_video_parent_category','LevelOneController@getUserVideoParentCategory')->name('level.user_video_parent_category');
    Route::get('/level_one/user_video_child_category','LevelOneController@getUserVideoChildCategory')->name('level.user_video_child_category');
    Route::get('/level_one/user_video_tolerate_grade','LevelOneController@getUserTolerateGrade')->name('level.user_video_tolerate_grade');


    Route::get('/user/login','Auth\LoginController@showLoginForm')->name('login');
    Route::post('ajax_login', 'Auth\LoginController@ajaxLogin')->name('ajax_login');
    Route::get('logout', 'Auth\LoginController@logout');

    Route::get('email-verification/index','Auth\EmailVerificationController@getVerificationIndex')->name('email-verification.index');
    Route::get('email-verification/error','Auth\EmailVerificationController@getVerificationError')->name('email-verification.error');
    Route::get('email-verification/check/{token}', 'Auth\EmailVerificationController@getVerification')->name('email-verification.check');
    Route::get('email-verification-required', 'Auth\EmailVerificationController@required')->name('email-verification.required');


});
//Route::get('
///{slug}.html', 'PagePublicController@getPage');
/*
Route::group(
    [
        'prefix' => trans_setlocale() . '/admin/menu',
    ], function () {
    Route::post('menu/{id}/tree', 'MenuResourceController@tree');
    Route::get('menu/{id}/test', 'MenuResourceController@test');
    Route::get('menu/{id}/nested', 'MenuResourceController@nested');

    Route::resource('menu', 'MenuResourceController');
   // Route::resource('submenu', 'SubMenuResourceController');
});
*/