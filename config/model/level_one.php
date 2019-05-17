<?php

return [

    /*
     * Modules .
     */
    'modules'  => ['level_one_videos'],


    /*
     * Views for the page  .
     */
    'views'    => ['default' => 'Default', 'left' => 'Left menu', 'right' => 'Right menu'],

    'level_one_video'     => [
        'model'        => 'App\Models\LevelOneVideo',
        'table'        => 'level_one_videos',
        'primaryKey'   => 'id',
        'hidden'       => [],
        'visible'      => [],
        'guarded'      => ['*'],
        //'slugs'        => ['slug' => 'name'],
        'fillable'     => ['order', 'slug','video_path','video_thumb_path','video_rectangle_thumb_path'],
        'upload_folder' => '/page/page',
        'encrypt'      => ['id'],
        //'revision'     => ['name', 'title'],
        'perPage'      => '20',
        'search'        => [

        ],
    ],


    'level_one_video_category' => [
        'model'        => 'App\Models\LevelOneVideoCategory',
        'table'        => 'level_one_video_categories',
        'primaryKey'   => 'id',
        'hidden'       => [],
        'visible'      => [],
        'guarded'      => ['*'],
        //'slugs'        => ['slug' => 'name'],
        'fillable'     => ['name', 'parent_id','slug'],
        'upload_folder' => '/page/page',
        'encrypt'      => ['id'],
        //'revision'     => ['name', 'title'],
        'perPage'      => '20',
        'search'        => [

        ],
    ],
    'user_level_one_video_category' => [
        'model'        => 'App\Models\UserLevelOneVideoCategory',
        'table'        => 'user_level_one_video_categories',
        'primaryKey'   => 'id',
        'hidden'       => [],
        'visible'      => [],
        'guarded'      => ['*'],
        //'slugs'        => ['slug' => 'name'],
        'fillable'     => ['user_id', 'video_id','category_id'],
        'upload_folder' => '/page/page',
        'encrypt'      => ['id'],
        //'revision'     => ['name', 'title'],
        'perPage'      => '20',
        'search'        => [

        ],
    ],
    'user_level_one_video_tolerate_grade' => [
        'model'        => 'App\Models\UserLevelOneVideoTolerateGrade',
        'table'        => 'user_level_one_video_tolerate_grades',
        'primaryKey'   => 'id',
        'hidden'       => [],
        'visible'      => [],
        'guarded'      => ['*'],
        //'slugs'        => ['slug' => 'name'],
        'fillable'     => ['user_id', 'video_id','grade'],
        'upload_folder' => '/page/page',
        'encrypt'      => ['id'],
        //'revision'     => ['name', 'title'],
        'perPage'      => '20',
        'search'        => [

        ],
    ],
    'user_level_one_video_category_notice_grade' => [
        'model'        => 'App\Models\UserLevelOneVideoCategoryNoticeGrade',
        'table'        => 'user_level_one_video_category_notice_grades',
        'primaryKey'   => 'id',
        'hidden'       => [],
        'visible'      => [],
        'guarded'      => ['*'],
        //'slugs'        => ['slug' => 'name'],
        'fillable'     => ['user_id', 'category_id','grade'],
        'upload_folder' => '/page/page',
        'encrypt'      => ['id'],
        //'revision'     => ['name', 'title'],
        'perPage'      => '20',
        'search'        => [

        ],
    ],
];
