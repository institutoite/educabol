<div class="btn-group">
    @if((int) $course->status === \App\Models\Course::PUBLISHED)
        <button type="button" class="status-btn completed">Publicado</button>
    @elseif((int) $course->status === \App\Models\Course::PENDING)
        <button type="button" class="status-btn on_hold">Pendiente</button>
    @else
        <button type="button" class="status-btn un_paid">Rechazado</button>
    @endif
</div>