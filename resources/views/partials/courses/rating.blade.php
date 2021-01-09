<div>
    <ul class="list-inline">
        @if ($rating == 0)
            {{ __('Este curso no tiene calificaciones') }}
        @else
            @for ($i = 1; $i<=$rating; $i++)
                <i class="fa fa-star" style="color: #fbb545"></i>
            @endfor
        @endif
        
    </ul>
</div>