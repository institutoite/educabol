<div class="mt-8">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-3 gap-8">
        <div class="col-span-2">
            <div class="embed-responsive">
                {!!$current->iframe!!}
            </div>

            <h1 class="text-3xl text-gray-600 font-bold mt-4">
                {{$current->name}}
            </h1>

            @if ($current->description)
                <div class="text-gray-600">
                    {{$current->description->name}}
                </div>
            @endif

            <div class="flex items-center mt-4 cursor-pointer">
                <i class="fas fa-toggle-off text-2xl text-gray-600"></i>
                <p class="text-sm ml-2">Marcar esta unidad como culminada</p>
            </div>

            <div class="card mt-2">
                <div class="card-body flex text-gray-500 font-bold">
                    
                    @if ($this->previous)
                        <a class="cursor-pointer">Tema anterior</a>
                    @endif

                    @if ($this->next)
                        <a class="ml-auto cursor-pointer">Siguiente tema</a>
                    @endif
                </div>
            </div>

            <p>Indice: {{$this->index}}</p>
            <p>Previus: @if ($this->previous)
                {{$this->previous->id}}
            @endif</p>
            <p>Next: @if ($this->next)
                {{$this->next->id}}
            @endif</p>
        </div>
    
        <div class="bg-white shadow-lg rounded overflow-hidden">
            <div class="px-6 py-4">
                <h1>{{$course->title}}</h1>

                <div class="flex items-center">
                    <figure>
                        <img class="h-8 w-8 object-cover rounded-full shadow-lg" src="{{$course->teacher->profile_photo_url}}" alt="">
                    </figure>

                    <div>
                        <p>{{$course->teacher->name}}</p>
                    </div>
                </div>
                <ul>
                    @foreach ($course->sections as $section)
                        <li>
                            <a class="font-bold" href="">{{$section->name}}</a>
                            <ul>
                                @foreach ($section->lessons as $lesson)
                                    <li>
                                        <a class="cursor-pointer" wire:click="changeLesson({{$lesson}})">{{$lesson->id}} @if ($lesson->completed)
                                            (Completado)
                                        @endif</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
