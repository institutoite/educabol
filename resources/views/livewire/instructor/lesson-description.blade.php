<div>
    <article class="card">
        <div class="card-body bg-gray-100">
            <header>
                <h1>Descripcion de la leccion</h1>
            </header>

            <div>
                <hr class="my-2">

                @if ($lesson->description)
                    <form wire:submit.prevent="update">
                        <textarea wire:model="description.name" class="form-input w-full"></textarea>

                        @error('description.name')
                            <span class="text-sm text-red-500">{{$message}}</span>
                        @enderror

                        <div class="flex justify-end">
                            <button wire:click="destroy" class="btn btn-danger text-sm" type="button">Eliminar</button>
                            <button class="btn btn-primary text-sm ml-2" type="submit">Actualizar</button>
                        </div>
                    </form>
                @else
                    <div>
                        <textarea wire:model="name" class="form-input w-full" placeholder="Agregue una descripcion de la leccion ..."></textarea>

                        @error('name')
                            <span class="text-sm text-red-500">{{$message}}</span>
                        @enderror

                        <div class="flex justify-end">
                            <button wire:click="store" class="btn btn-primary text-sm ml-2">Agregar</button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </article>
</div>
