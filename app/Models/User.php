<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function navigation () {
    	return auth()->check() ? auth()->user()->role->name : 'guest';
    }

    public function role () {
    	return $this->belongsTo(Role::class);
    }

    public function student () {
    	return $this->hasOne(Student::class);
    }

    public function teacher () {
    	return $this->hasOne(Teacher::class);
    }

    public function socialAccount () {
    	return $this->hasOne(UserSocialAccount::class);
    }
    
}
