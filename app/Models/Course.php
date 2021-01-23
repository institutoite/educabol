<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Course extends Model
{
	use HasFactory;

    protected $fillable = [
        "user_id", "title", "description",
        "picture", "price", "featured", "status"
    ];

    const PUBLISHED = 1;
    const PENDING = 2;
    const REJECTED = 3;

    const prices = [
        '30' => 'Bs. 30',
        '35' => 'Bs. 35',
        '40' => 'Bs. 40',
        '45' => 'Bs. 45',
        '50' => 'Bs. 50'
    ];

    protected $appends = [
        "rating", "formatted_price"
    ];

    protected static function boot() {
        parent::boot();
        if ( !app()->runningInConsole()) {
            self::saving(function ($table) {
                $table->user_id = auth()->id();
            });
        }
    }

    public function imagePath() {
        return sprintf('%s/%s', '/storage/courses', $this->picture);
    }

    public function categories () {
        return $this->belongsToMany(Category::class);
    }

    public function students() {
        return $this->belongsToMany(User::class, "course_student");
    }

    public function teacher() {
        return $this->belongsTo(User::class, "user_id");
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function units() {
        return $this->hasMany(Unit::class)->orderBy("order", "asc");
    }

    public function getRatingAttribute () {
        return $this->reviews->avg('stars');
    }

    public function getFormattedPriceAttribute() {
        return Currency::formatCurrency($this->price);
    }

    public function totalVideoUnits() {
        return $this->units->where("unit_type", Unit::VIDEO)->count();
    }

    public function totalFileUnits() {
        return $this->units->where("unit_type", Unit::ZIP)->count();
    }

    public function totalTime() {
        $minutes = $this->units->where("unit_type", Unit::VIDEO)->sum("unit_time");
        return gmdate("H:i", $minutes * 60);
    }

    public function scopeFiltered(Builder $builder) {
        $builder->with("teacher");
        $builder->withCount("students");
        $builder->where("status", Course::PUBLISHED);
        if (session()->has('search[courses]')) {
            $builder->where('title', 'LIKE', '%' . session('search[courses]') . '%');
        }
        return $builder->paginate();
    }

    public function scopeForTeacher(Builder $builder) {
        return $builder
            ->withCount('students')
            ->where("user_id", auth()->id())
            ->paginate();
    }
    
}
