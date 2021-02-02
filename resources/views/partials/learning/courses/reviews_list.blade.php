@forelse($course->reviews as $review)
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-dark text-white p-0 text-center">
                {{ $review->author->name }} ({{ $review->created_at->format('d/m/Y') }})
            </div>
            <div class="card-body pl-3">
                @include('partials.learning.courses.rating', ['rating' => $review->stars, 'hideCounter' => true])
                <hr />
                <div class="price"><small>{{ $review->review }}</small></div>
            </div>
        </div>
    </div>
@empty
    <div class="alert alert-dark">
        <i class="fa fa-info-circle"></i>
        {{ __("Este curso todavía no tiene valoraciones") }}
    </div>
@endforelse
