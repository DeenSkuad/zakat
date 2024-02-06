<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MaritalStatus extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'marital_statuses';

    public $fillable = [
        'name',
        'description'
    ];
}
