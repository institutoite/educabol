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

    @livewire('courses-index')
    
</x-app-layout>