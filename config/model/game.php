<?php

return [

/*
 * Modules .
 */
    'modules'  => ['user_answer','question','option'],


/*
 * Views for the page  .
 */
    'views'    => ['default' => 'Default', 'left' => 'Left menu', 'right' => 'Right menu'],

    'level'     => [
        'model'        => 'App\Models\Level',
        'table'        => 'levels',
        'primaryKey'   => 'id',
        'hidden'       => [],
        'visible'      => [],
        'guarded'      => ['*'],
        //'slugs'        => ['slug' => 'name'],
        'fillable'     => ['level_name', 'image'],
        'translate'    => ['level_name', 'image'],
        'upload_folder' => '/page/page',
        'encrypt'      => ['id'],
        //'revision'     => ['name', 'title'],
        'perPage'      => '20',
        'search'        => [

        ],
    ],

    'question'     => [
        'model'        => 'App\Models\Question',
        'table'        => 'questions',
        'primaryKey'   => 'id',
        'hidden'       => [],
        'visible'      => [],
        'guarded'      => ['*'],
        //'slugs'        => ['slug' => 'name'],
        'fillable'     => ['level_id', 'slug', 'type', 'content', 'image','order'],
        'translate'    => ['level_id', 'slug', 'type', 'content', 'image','order'],
        'upload_folder' => '/page/page',
        'encrypt'      => ['id'],
        //'revision'     => ['name', 'title'],
        'perPage'      => '20',
        'search'        => [

        ],
    ],
    'option'     => [
        'model'        => 'App\Models\Option',
        'table'        => 'options',
        'primaryKey'   => 'id',
        'hidden'       => [],
        'visible'      => [],
        'guarded'      => ['*'],
        //'slugs'        => ['slug' => 'name'],
        'fillable'     => ['question_id', 'content', 'image','order'],
        'translate'    => ['question_id', 'content', 'image','order'],
        'upload_folder' => '/page/page',
        'encrypt'      => ['id'],
        //'revision'     => ['name', 'title'],
        'perPage'      => '20',
        'search'        => [

        ],
    ],
// Modale variables for page module.
    'user_answer'     => [
        'model'        => 'App\Models\UserAnswer',
        'table'        => 'user_answers',
        'primaryKey'   => 'id',
        'hidden'       => [],
        'visible'      => [],
        'guarded'      => ['*'],
        //'slugs'        => ['slug' => 'name'],
        'fillable'     => ['user_id','history_id','level_id','question_id', 'option_id', 'content', 'created_at','updated_at'],
        'translate'    => ['user_id','history_id', 'level_id','question_id', 'option_id', 'content', 'created_at','updated_at'],
        'upload_folder' => '/page/page',
        'encrypt'      => ['id'],
       // 'revision'     => ['name', 'title'],
        'perPage'      => '20',
        'search'        => [

        ],
    ],
    'game_history' => [
        'model'        => 'App\Models\GameHistory',
        'table'        => 'game_histories',
        'primaryKey'   => 'id',
        'hidden'       => [],
        'visible'      => [],
        'guarded'      => ['*'],
        //'slugs'        => ['slug' => 'name'],
        'fillable'     => ['user_id','level_id', 'created_at','updated_at'],
        'translate'    => ['user_id', 'level_id', 'created_at','updated_at'],
        'upload_folder' => '/page/page',
        'encrypt'      => ['id'],
        // 'revision'     => ['name', 'title'],
        'perPage'      => '20',
        'search'        => [

        ],
    ],

];
