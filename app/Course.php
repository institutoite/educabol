<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //use SoftDeletes;

	protected $fillable = ['teacher_id', 'name', 'description', 'picture', 'level_id', 'category_id', 'status'];

	const PUBLISHED = 1;
	const PENDING = 2;
	const REJECTED = 3;

	protected $withCount = ['reviews', 'students'];
}
