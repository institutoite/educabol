<div class="col-2">
    @auth
        @can('opt_for_course', $course)
            @can('inscribe', $course)
                <a href="{{ route('cart.add', $course->id) }}" class="material-icons" style="font-size: 36px">add_shopping_cart</a>
            @else
                <a href="#" class="material-icons" style="font-size: 36px">read_more</a>
            @endcan
        @else
            <a href="#">
                <i class="fa fa-user"></i> {{ __("Soy autor") }}
            </a>
        @endcan
    @else
        <a href="{{ url('/login?redirect_to='.url()->current()) }}" class="material-icons" style="font-size: 36px">add_shopping_cart</a>
    @endauth
</div>