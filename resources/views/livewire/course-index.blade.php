<div>
    <div class="bg-gray-200 py-4 mb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg shadow h-12 px-4 rounded-lg text-gray-700 mr-4">
                <i class="far fa-file-alt text-xs mr-4"></i>
                Todos los cursos
            </button>

            
            <!-- Dropdown categorias-->
            <div class="relative mr-4" x-data="{ open: false }">
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg shadow" x-on:click="open = !open">
                    Categoria
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">   
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-gray-500 hover:text-white">Settings</a>
                    <div class="py-2">
                        <hr></hr>
                    </div>
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-gray-500 hover:text-white">    
                        Logout
                    </a>
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->
 
            <!-- Dropdown niveles-->
            <div class="relative" x-data="{ open: false }">
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg shadow" x-on:click="open = !open">
                    Niveles
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">   
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-gray-500 hover:text-white">Settings</a>
                    <div class="py-2">
                        <hr></hr>
                    </div>
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-gray-500 hover:text-white">    
                        Logout
                    </a>
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->

        </div>
    </div>

    <div class="course-grid">
        <div class="container">
            <div class="flat-courses clearfix isotope-courses">
                @foreach ($courses as $course)
                    <div class="course clearfix Marketing Certificate Popular">    
                        <div class="flat-course">
                            <div class="featured-post post-media">
                                <div class="entry-image pic">
                                    <img class="h-36 w-full object cover" src="storage/cursos/32e00145b77212858543a9a28cf13f3a.png" alt="images">
                                    <div class="hover-effect"></div>
                                    <div class="links">
                                        <a href="{{route('course.show', $course)}}">Mas informacion</a>
                                    </div>
                                </div>
                            </div>
                            <div class="course-content clearfix">
                                <div class="wrap-course-content">
                                    <h4>
                                        <a href="#">{{ Str::limit($course->title, 40) }}</a>
                                    </h4>
                                    <p>
                                        <i class="fa fa-users"></i>
                                        <span>({{$course->students_count}}) estudiantes</span>. 
                                    </p>
                                    <div class="author-info">
                                        <div class="author-name">
                                            {{$course->teacher->name}}
                                        </div>
                                        <div class="enroll">
                                            <a href="#">Enroll</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-rating-price">
                                    <div class="meta-rate">
                                        <div>
                                            <i class="fa fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400" aria-hidden="true"></i>
                                            <i class="fa fa-star text-{{$course->rating >= 2 ? 'yellow' : 'gray'}}-400" aria-hidden="true"></i>
                                            <i class="fa fa-star text-{{$course->rating >= 3 ? 'yellow' : 'gray'}}-400" aria-hidden="true"></i>
                                            <i class="fa fa-star text-{{$course->rating >= 4 ? 'yellow' : 'gray'}}-400" aria-hidden="true"></i>
                                            <i class="fa fa-star text-{{$course->rating == 5 ? 'yellow' : 'gray'}}-400" aria-hidden="true"></i>
                                            
                                        </div>
                                        <div class="price">
                                            <span class="price-previou">
                                                <del>$169</del>
                                            </span>
                                            <span class="price-now">$169</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> 
        </div>
    </div><!-- course-grid -->

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt:8 mb-8">
        {{$courses->links()}}
    </div>

</div>
