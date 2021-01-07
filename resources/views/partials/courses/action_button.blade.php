<div class="col-2">
    @auth
        @can('opt_for_course', $course)
            @can('inscribe', $course)
            <a class="btn btn-subscribe btn-bottom btn-block" href="#">
                <i class="fa fa-bolt"></i> {{ __("Inscribirme") }}
            </a>
            @else
            <a class="btn btn-subscribe btn-bottom btn-block" href="#">
                <i class="fa fa-bolt"></i> {{ __("Inscrito") }}
            </a>
            @endcan
        @else
            <a class="btn btn-subscribe btn-bottom btn-block" href="#">
                <i class="fa fa-user"></i> {{ __("Soy autor") }}
            </a>
        @endcan
    @else
        {{Request::url()}}
        
        <a href="{{ route('sesion.show', Request::url() ) }}" class="material-icons" style="font-size: 36px">add_shopping_cart</a>
    @endauth
</div>