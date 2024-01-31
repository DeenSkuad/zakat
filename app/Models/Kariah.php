<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kariah extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'kariahs';

    public $fillable = [
        'district_id',
        'name',
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
