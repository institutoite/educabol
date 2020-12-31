<?php

namespace App\Policies;

use App\Role;
use App\Course;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;

    public function opt_for_course (User $user, Course $course) {
    	return ! $user->teacher || $user->teacher->id !== $course->teacher_id;
    }

    public function subscribe (User $user) {
    	return $user->role_id !== Role::ADMIN && ! $user->subscribed('main');
    }

   

	public function review (User $user, Course $course) {
		return ! $course->reviews->contains('user_id', $user->id);
	}

}
