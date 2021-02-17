<div class="requirements-sg text clearfix">
    <div class="title">
        <a href="#">Contenido</a>
    </div>
    @forelse($course->units as $unit)
        <ul class="request">
            <li>
                {{ $unit->title }}
            </li>
        </ul>
    @empty
        <div class="empty-results">
            {{ __("El contenido de este curso todavía no está definido") }}
        </div>
    @endforelse
</div>
