<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AmilProfile extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'amil_profiles';

    public const INDIVIDUAL = 'individual';
    public const ORGANIZATION = 'organization';

    public $fillable = [
        'user_id',
        'type',
        'amil_no',
        'phone_no',
        'district_id',
        'kariah_id',
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
