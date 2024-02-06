<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsnafSpouseDependant extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'asnaf_spouse_dependants';

    public $fillable = [
        'asnaf_spouse_id',
        'name',
        'age',
        'remark',
        'status',
        'deleted_at',
        'deleted_by',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
}
