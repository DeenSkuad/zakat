<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsnafSpouse extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'asnaf_spouses';

    public $fillable = [
        'asnaf_profile_id',
        'name',
        'ic_no',
        'dependants',
        'remark',
        'status',
        'deleted_at',
        'deleted_by',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];

    public function spouseDependants()
    {
        return $this->hasMany(AsnafSpouseDependant::class, 'asnaf_spouse_id', 'id');
    }
}
