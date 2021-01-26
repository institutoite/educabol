<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\User;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    const ADMIN = 'ADMIN';
    const TEACHER = 'TEACHER';
    const STUDENT = 'STUDENT';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
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

    public function isTeacher() {
        return $this->role === User::TEACHER;
    }

    public function courses_learning() {
        return $this->belongsToMany(Course::class, "course_student");
    }
    
    public function scopePurchasedCourses() {
        return $this->courses_learning()->with("categories")->paginate();
    }

    public function scopeProcessedOrders() {
        return $this->orders()
            ->where("status", Order::SUCCESS)
            ->with("order_lines", "coupon")
            ->withCount("order_lines")
            ->paginate();
    }
    
}
