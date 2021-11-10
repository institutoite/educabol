<div>
    <div class="card">
        <div class="card-body">
            <p class="text-gray-800 text-xl">{{$course->reviews->count()}} valoraciones</p>

            @foreach ($course->reviews as $review)
                <article class="flex mb-4">
                    <figure>
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg" src="{{$review->user->profile_photo_url}}" alt="">
                    </figure>

                    <div class="card flex-1">
                        <div class="card-body bg-gray-100">
                            <p><b>{{$review->user->name}}</b> <i class="fas fa-star text-yellow-300"></i> {{$review->rating}}</p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</div>
