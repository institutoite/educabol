<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['teacher_id', 'name', 'description', 'picture', 'level_id', 'category_id', 'status'];

	const PUBLISHED = 1;
	const PENDING = 2;
	const REJECTED = 3;

	protected $withCount = ['reviews', 'students'];

	public function pathAttachment () {
		return "/images/courses/" . $this->picture;
	}

	public function getRouteKeyName() {
		return 'id';
	}

	public function category () {
		return $this->belongsTo(Category::class)->select('id', 'name');
	}

	public function goals () {
		return $this->hasMany(Goal::class)->select('id', 'course_id', 'goal');
	}

	public function level () {
		return $this->belongsTo(Level::class)->select('id', 'name');
	}

	public function reviews () {
		return $this->hasMany(Review::class)->select('id', 'user_id', 'course_id', 'rating', 'comment', 'created_at');
	}

	public function requirements () {
		return $this->hasMany(Requirement::class)->select('id', 'course_id', 'requirement');
	}

	public function students () {
		return $this->belongsToMany(Student::class);
	}

	public function teacher () {
		return $this->belongsTo(Teacher::class);
	}
	
	public function getCustomRatingAttribute () {
		return $this->reviews->avg('rating');
	}
	
	public function relatedCourses () {
		return Course::with('reviews')->whereCategoryId($this->category->id)
			->where('id', '!=', $this->id)
			->latest()
			->limit(6)
			->get();
    }
    
}
