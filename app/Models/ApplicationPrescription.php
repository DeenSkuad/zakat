<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApplicationPrescription extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'application_prescriptions';

    public $fillable = [
        'application_id',
        'prescription_id',
        'status',
        'remarks',
        'deleted_at',
        'deleted_by',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];
}
