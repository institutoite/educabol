@props(['course'])
<article class="bg-white shadow-lg rounded overflow-hidden">
    <img class="h-36 w-full object-cover" src="{{asset('storage/cursos/32e00145b77212858543a9a28cf13f3a.png')}}" alt="">

    <div class="px-6 py-4">
        <h1 class="text-xl text-gray-700 mb-2 leading-6">{{Str::limit($course->title,40)}}</h1>
        <p class="text-gray-500 text-sm mb-2">Prof: {{$course->teacher->name}}</p>

        
    </div>
</article>