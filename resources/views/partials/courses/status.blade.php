<div class="btn-group">
    @if((int) $course->status === \App\Models\Course::PUBLISHED)
        <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Publicado </div>
    @elseif((int) $course->status === \App\Models\Course::PENDING)
        <div class="flex items-center justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Pendiente </div>
    @else
        <div class="flex items-center justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Rechazado </div>
    @endif
</div>