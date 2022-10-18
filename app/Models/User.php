<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'token',
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function transactions()
    {
        $this->hasMany(Transaction::class);
    }

    public function generateToken()
    {
        $this->timestamps = false;
        $this->token = rand(100000, 999999);
        $this->token_expires_at = now()->addMinutes(10);
        $this->save();
    }

    public function resetToken()
    {
        $this->timestamps = false;
        $this->token = null;
        $this->token_expires_at = null;
        $this->save();
    }
}
