<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordResetToken extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $table = 'password_reset_tokens';

    public $fillable = [
        'email',
        'token',
        'created_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }
}
