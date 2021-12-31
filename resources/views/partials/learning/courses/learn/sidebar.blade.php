<div class="mt-8">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
            
            


            <h1 class="text-3xl text-gray-600 font-bold mt-4">
                
            </h1>


            <div class="card mt-2">
                <div class="card-body flex text-gray-500 font-bold">
                    
                </div>
            </div>

        </div>
    
        <div class="card">
            <div class="px-6 py-4">
                <h1 class="text-2xl leading-8 text-center mb-4">{{$course->title}}</h1>

                <div class="flex items-center">
                    <figure>
                        <img class="w-12 h-12 object-cover rounded-full mr-4" src="{{$course->teacher->profile_photo_url}}" alt="">
                    </figure>

                    <div>
                        <p>{{$course->teacher->name}}</p>
                    </div>
                </div>

                <p class="text-gray-400 text-sm mt-2"> Completado</p>

                <div class="relative pt-1">
                    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-teal-200">
                        <div class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-teal-400 transition-all duration-500"></div>
                    </div>
                </div>
                <ul>
                    @foreach ($course->sections as $section)
                        <li class="text-gray-600 mb-4">
                            <a class="font-bold text-base inline-block mb-2" href="">{{$section->name}}</a>
                            <ul>
                                @foreach ($section->lessons as $unit)
                                    <li class="flex mb-1">
                                        <div class="unit">
                                            <a href="#" data-unit="{{ $unit }}">{{$unit->name}} </a>
                                        </div>
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
