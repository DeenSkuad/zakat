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
        'address',
        'postcode',
        'remark',
        'status',
        'deleted_at',
        'deleted_by',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    public function asnafs()
    {
        return $this->hasMany(AsnafProfile::class, 'kariah_id', 'id');
    }
}
