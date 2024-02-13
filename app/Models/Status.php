<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'statuses';

    public const ACTIVE = 1;
    public const INACTIVE = 2;
    public const APPROVED = 3;
    public const REJECTED = 4;
    public const PAID = 5;
    public const PENDING_PAYMENT = 6;
    public const FAIL = 7;
    public const CLOSED = 8;

    public $fillable = [
        'name',
        'order',
        'remark',
        'status',
        'deleted_at',
        'deleted_by',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];
}
