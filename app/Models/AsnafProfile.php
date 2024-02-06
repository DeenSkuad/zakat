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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function spouse()
    {
        return $this->hasOne(AsnafSpouse::class, 'asnaf_profile_id', 'id');
    }

    public function district()
    {
        return $this->hasOne(District::class, 'id', 'district_id');
    }

    public function state()
    {
        return $this->hasOne(State::class, 'id', 'state_id');
    }

    public function kariah()
    {
        return $this->hasOne(Kariah::class, 'id', 'kariah_id');
    }

    public function gender()
    {
        return $this->hasOne(Gender::class, 'id', 'gender_id');
    }

    public function maritalStatus()
    {
        return $this->hasOne(MaritalStatus::class, 'id', 'marital_status_id');
    }

    public function occupation()
    {
        return $this->hasOne(Occupation::class, 'id', 'occupation_id');
    }

    public function bank()
    {
        return $this->hasOne(Bank::class, 'id', 'bank_id');
    }

    public function headOfFamily()
    {
        return $this->hasOne(HeadOfFamily::class, 'id', 'head_of_family_id');
    }

    public function adult()
    {
        return $this->hasOne(Adult::class, 'id', 'adult_id');
    }

    public function education()
    {
        return $this->hasOne(Education::class, 'id', 'education_id');
    }

    public function school()
    {
        return $this->hasOne(School::class, 'id', 'school_id');
    }

}
