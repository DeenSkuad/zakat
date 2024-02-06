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
        'gender_id',
        'marital_status_id',
        'occupation_id',
        'salary',
        'bank_id',
        'bank_account_no',
        'total_family_income',
        'head_of_family_id',
        'adult_id',
        'education_id',
        'school_id',
        'year',
        'total_children',
        'total_children_ipt',
        'total_children_school',
        'total_children_underage',
        'total_children_oku',
        'total_dependant_cost',
        'remark',
        'status',
        'deleted_at',
        'deleted_by',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];

    public function spouse()
    {
        return $this->hasOne(AsnafSpouse::class, 'asnaf_profile_id', 'id');
    }
}
