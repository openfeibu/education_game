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

    'level_four_strategy'     => [
        'model'        => 'App\Models\LevelFourStrategy',
        'table'        => 'level_four_strategies',
        'primaryKey'   => 'id',
        'hidden'       => [],
        'visible'      => [],
        'guarded'      => ['*'],
        //'slugs'        => ['slug' => 'name'],
        'fillable'     => [ 'slug','content'],
        'upload_folder' => '/page/page',
        'encrypt'      => ['id'],
        //'revision'     => ['name', 'title'],
        'perPage'      => '20',
        'search'        => [

        ],
    ],

    'user_level_four_strategy_like'     => [
        'model'        => 'App\Models\UserLevelFourStrategyLike',
        'table'        => 'user_level_four_strategy_like',
        'primaryKey'   => 'id',
        'hidden'       => [],
        'visible'      => [],
        'guarded'      => ['*'],
        //'slugs'        => ['slug' => 'name'],
        'fillable'     => [ 'strategy_id','user_id','history_id','created_at','updated_at'],
        'upload_folder' => '/page/page',
        'encrypt'      => ['id'],
        //'revision'     => ['name', 'title'],
        'perPage'      => '20',
        'search'        => [

        ],
    ],
];