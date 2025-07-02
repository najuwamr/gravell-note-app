<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
        'google_drive_token',
        'google_drive_refresh_token',
    ];

    protected $hidden = ['password', 'google_drive_token', 'google_drive_refresh_token'];

    // Relasi
    public function projects() {
        return $this->hasMany(Projects::class);
    }

    public function notes() {
        return $this->hasMany(Notes::class);
    }
}

