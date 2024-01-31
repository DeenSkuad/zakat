<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsnafProfile extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'asnaf_profiles';

    public $fillable = [
        'address_1',
        'address_2',
        'address_3',
        'district_id',
        'state_id',
        'postcode',
        'kariah_id',
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
