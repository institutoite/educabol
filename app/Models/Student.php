<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title'];

	protected $appends = ['courses_formatted'];

    public function courses () {
    	return $this->belongsToMany(Course::class);
    }

	public function user () {
		return $this->belongsTo(User::class)->select('id', 'role_id', 'name', 'email');
	}

	public function getCoursesFormattedAttribute () {
    	return $this->courses->pluck('name')->implode('<br />');
	}
}
