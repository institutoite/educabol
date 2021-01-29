<?php

namespace App\Policies;

use App\Models\Course;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function review (User $user, Course $course) {
        $coursePurchased = $course->students->contains($user->id);
        $reviewed = $course->reviews->contains('user_id', $user->id);
        return $coursePurchased && !$reviewed;
    }

}
