@guest
    <a href="{{ route('login') }}" class="btn btn-info btn-lg btn-block">
        {{ __("Iniciar Sesion") }}
    </a>
@else
    @can("purchaseCourse", $course)
        <a href="{{ route('cart.add', $course->id) }}">
            {{ __("Comprar") }}
        </a>
    @else
        <a href="{{ route('courses.learn', ['course' => $course]) }}">
            {{ __("Ir al curso") }}
        </a>
    @endcan
@endguest
