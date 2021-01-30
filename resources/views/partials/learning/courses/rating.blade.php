<div>
    <ul class="list-inline">
        @if ($rating == 0)
            {{ __('Sin calificaciones') }}
        @else
            @for ($i = 1; $i<=$rating; $i++)
                <i class="fa fa-star" style="color: #fbb545"></i>
            @endfor
        @endif
        @if(!isset($hideCounter))
            
                <h3>({{ $course->reviews->count() }})</h3>
            
        @endif
    </ul>
</div>