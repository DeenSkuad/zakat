<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HeadOfFamily extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'head_of_families';

    public $fillable = [
        'name',
        'description'
    ];
}
