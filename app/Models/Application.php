<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'applications';

    public $fillable = [
        'asnaf_profile_id',
        'service_id',
        'name',
        'ic_no',
        'disease_id',
        'disease_background',
        'treatment_period',
        'medical_cost',
        'frequency',
        'self_support',
        'comments',
        'status',
        'remarks',
        'deleted_at',
        'deleted_by',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    public function asnaf()
    {
        return $this->hasOne(AsnafProfile::class, 'id', 'asnaf_profile_id');
    }

    public function service()
    {
        return $this->hasOne(Service::class, 'id', 'service_id');
    }

    public function attachments()
    {
        return $this->hasMany(ApplicationAttachment::class, 'application_id', 'id');
    }

    public function diseases()
    {
        return $this->hasManyThrough(Disease::class, ApplicationDisease::class, 'application_id', 'id', 'id', 'disease_id');
    }

    public function prescriptions()
    {
        return $this->hasManyThrough(Prescription::class, ApplicationPrescription::class, 'application_id', 'id', 'id', 'prescription_id');
    }

    public function status()
    {
        return $this->hasOne(Status::class, 'status', 'id');
    }
}
