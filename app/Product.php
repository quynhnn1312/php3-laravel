<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = ['*'];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

    protected $status_pro = [
        1 => [
            'name' => 'Hiển thị',
            'class' => 'badge-success',
            'icon' => 'fa-eye'
        ],
        0 => [
            'name' => 'Ẩn',
            'class' => 'badge-danger',
            'icon' => 'fa-eye-slash'
        ]
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'cate_id');
    }

    public function getStatus()
    {
        return Arr::get($this->status_pro, $this->status, '[N/A]');
    }
}
