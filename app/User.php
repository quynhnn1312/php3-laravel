<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = ['name','email','password','phone','address'];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

    protected $status_user = [
            1 => [
                'name' => 'Hoạt động',
                'class' => 'badge-success',
                'icon' => 'fa-user-clock'
            ],
            0 => [
                'name' => 'Tạm ngừng',
                'class' => 'badge-danger',
                'icon' => 'fa-user-lock'
            ]
        ];

    public function getStatus()
    {
        return Arr::get($this->status_user, $this->status, '[N/A]');
    }


    use Notifiable;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
