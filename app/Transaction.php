<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Transaction extends Model
{
    protected $table = 'transactions';

    const STATUS_DEFAULT = 1;
    const STATUS_PROCESS = 2;
    const STATUS_SUCCESS = 3;
    const STATUS_CANCEL = -1;

    protected $tr_status = [
        0 => [
            'class' => 'badge-secondary',
            'name'  => 'Tiếp nhận'
        ],
        1 => [
            'class' => 'badge-info',
            'name'  => 'Đang vận chuyển'
        ],
        2 => [
            'class' => 'badge-success',
            'name'  => 'Hoàn thành'
        ],
        -1 => [
            'class' => 'badge-danger',
            'name'  => 'Đã Huỷ'
        ],
    ];

    public function getStatus()
    {
        return Arr::get($this->tr_status, $this->status, "[N\A]");
    }
}
