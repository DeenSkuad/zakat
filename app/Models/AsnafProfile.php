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
        'user_id',
        'address_1',
        'address_2',
        'address_3',
        'district_id',
        'state_id',
        'postcode',
        'phone_no',
        'kariah_id',
        'amil_comment',
        'signature',
        'front_ic',
        'back_ic',
        'muallaf_card',
        'gender',
        'marital_status',
        'employment',
        'salary',
        'bank_account',
        'bank_account_no',
        'total_family_income',
        'head_of_family',
        'adult',
        'dependants',
        'dependants_cost',
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
