<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adult extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'adults';

    public $fillable = [
        'name',
        'description'
    ];
}
