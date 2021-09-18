<div>
    <x-slot name='course'>
        {{$course->slug}}
    </x-slot>

    <h1 class="text-2xl font-bold">LECCIONES DEL CURSO</h1>

    <hr class="mt-2 mb-8"> 


    @foreach ($course->sections as $item)
        
        <article class="card mb-6">
            <div class="card-body bg-gray-100">
                @if ($section->id == $item->id)

                    <form wire:submit.prevent="update">
                        <input wire:model="section.name" class="form-input w-full" placeholder="Ingrese el nombre de la seccion">
                        
                        @error('section.name')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror

                    </form>

                @else
                    <header class="flex justify-between items-center">
                        <h1 class="cursor-pointer"><strong>Seccion:</strong> {{$item->name}}</h1>

                        <div>
                            <i class="fas fa-edit cursor-pointer text-blue-500" wire:click="edit({{$item}})"></i>
                            <i class="fas fa-eraser cursor-pointer text-red-500"></i>
                        </div>
                    </header>
                @endif

            </div>
        </article>

    @endforeach

    <div>
        <a class="flex items-center cursor-pointer">
            <i class="far fa-plus-square text-2xl text-teal-400 mr-2"></i>
            Agregar nueva seccion
        </a>

        <article class="card">
            <div class="card-body bg-gray-100">
                <h1 class="text-xl font-bold mb-4">Agregar nueva seccion</h1>

                <div>
                    <input class="form-input w-full" placeholder="Escriba el nombre de la seccion">
                </div>

                <div class="flex justify-end">
                    <button class="btn btn-danger">Cancelar</button>
                </div>
            </div>
        </article>
    </div>

</div>
