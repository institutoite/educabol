<x-app-layout>

    <section class="bg-cover" style="background-image: url({{asset('img/home/home.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">Cursos en linea</h1>
                <p class="text-white text-lg mt-2 mb-4">Aprende a tu ritmo desde cualquier dispositivo</p>

                @livewire('search')

            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">¿Porque elegirnos?</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/1.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Aprende a tu ritmo</h1>
                </header>

                <p class="text-sm text-gray-500">Aprende a cualquier hora y desde cualquier dispositivo.</p>
                
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/2.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Profesores con experiencia</h1>
                </header>

                <p class="text-sm text-gray-500">Cada curso es impartido solo por profesores con gran experiencia.</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/3.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos producidos profesionalmente</h1>
                </header>

                <p class="text-sm text-gray-500">Seleccionamos los mejores contenidos multimedia para que no pierdas ningun detalle.</p>
                
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/4.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Incribite a un curso</h1>
                </header>

                <p class="text-sm text-gray-500">Desde aprender matematica hasta aprender computacion, pasando por practicamente cualquier materia.</p>
                
            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes qué curso llevar?</h1>
        <p class="text-center text-white">Dirígete al catálogo de cursos y filtralos por categoría o nivel</p>

        <div class="flex justify-center mt-4">
            <a href="{{ route('courses.index') }}" class="btn btn-ite text-white font-bold py-2 px-4 rounded">
                Catalogo de cursos
            </a>
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">ULTIMOS CURSOS</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Estamos desarrollando cursos para subir a nuestra plataforma</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
                <x-course-card :course="$course" />
            @endforeach
        </div>
        
    </section>

    @role('Student')
    <section class="mt-24 bg-indigo-900 bg-opacity-100 py-12">
        <h1 class="text-center text-white text-3xl">¿Te gustaria enseñar en nuestra plataforma educativa?</h1>
        <p class="text-center text-white">Crea contenido, subelo a nuestra plataforma y comienza a ganar dinero a traves de tus conocimientos.</p>

        <div class="flex justify-center mt-4">
            <a href="{{ route('solicitude.teacher') }}" class="btn btn-ite text-white font-bold py-2 px-4 rounded">
                Convertirme en profesor
            </a>
        </div>
    </section>
    @endrole

</x-app-layout>


