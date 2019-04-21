<?php

namespace App\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class AdminUserTransformer extends TransformerAbstract
{
    public function transform(\App\Models\AdminUser $admin_user)
    {
        return [
            //'id'                => $admin_user->getRouteKey(),
            'id' => $admin_user->id,
            'name'              => $admin_user->name,
            'email'             => $admin_user->email,
            'parent_id'         => $admin_user->parent_id,
            'api_token'         => $admin_user->api_token,
            'remember_token'    => $admin_user->remember_token,
            'sex'               => $admin_user->sex,
            'dob'               => $admin_user->dob,
            'designation'       => $admin_user->designation,
            'mobile'            => $admin_user->mobile,
            'phone'             => $admin_user->phone,
            'address'           => $admin_user->address,
            'street'            => $admin_user->street,
            'city'              => $admin_user->city,
            'district'          => $admin_user->district,
            'state'             => $admin_user->state,
            'country'           => $admin_user->country,
            'photo'             => $admin_user->photo,
            'web'               => $admin_user->web,
            'permissions'       => $admin_user->permissions,
            'status'            => $admin_user->status,
            'roles' => $admin_user->roles,
            'role_names' => implode('，',$admin_user->roles->pluck('name')->all()),
            'created_at'        => format_date($admin_user->created_at),
            'updated_at'        => format_date($admin_user->updated_at),
        ];
    }
}