<?php

return [

    /**
     * Singlular and plural name of the module
     */
    'name'          => '權限',
    'names'         => '權限',
    'title'       => [
        'user'  => '我的權限',
        'admin' => '權限',
        'sub'   => [
            'user'  => 'Manage permissions created by me',
            'admin' => 'Manage permissions',
        ],
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'name'                       => 'Please enter name',
        'slug'                       => 'Please enter slug',
        'description'                => 'Please enter description',
        'created_at'                 => 'Please select created at',
        'updated_at'                 => 'Please select updated at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'name'                       => '名稱',
        'slug'                       => '標識',
        'description'                => '描述',
        'icon' => '圖標',
        'order' => '排序',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'name'                       => ['name' => 'Name', 'data-column' => 1, 'checked'],
        'slug'                       => ['name' => 'Slug', 'data-column' => 2, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Permissions',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
