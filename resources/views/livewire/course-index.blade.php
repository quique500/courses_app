<div>

    {{-- BARRA DE NAVEGACION  --}}
    <div class="bg-blue-400 py-4 mb-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4">
                <i class="fas fa-laptop-code  mr-2"></i>
                Todos los cursos
            </button>


            <!-- Dropdown categories-->
            <div class="relative mr-4" x-data="{open:false}">
                <button class="px-4 text-gray-700 block h-12  rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open= true">
                    <i class="fas fa-thin fa-tags mr-2"></i>
                    Categoría
                    <i class="fas fa-thin fa-caret-down ml-2"></i>
                </button>
                 <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl " x-show="open" x-on:click.away="open = false">
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-500 hover:text-white">Settings</a>
                    <div class="py-2">
                    <hr></hr>
                </div>
                <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-500 hover:text-white">
                    Logout
                </a>
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->

            <!-- Dropdown levels-->
            <div class="relative mr-4" x-data="{open:false}">
                <button class="px-4 text-gray-700 block h-12  rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open= true">
                    <i class="fas fa-solid fa-list mr-2"></i>
                    Niveles
                    <i class="fas fa-thin fa-caret-down ml-2"></i>
                </button>
                 <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl " x-show="open" x-on:click.away="open = false">
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-500 hover:text-white">Settings</a>
                    <div class="py-2">
                    <hr></hr>
                </div>
                <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-500 hover:text-white">
                    Logout
                </a>
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->

        </div>
    </div>

    {{-- MOSTRAR CURSOS --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($courses as $course)
            <article class="bg-white shadow-lg rounded overflow-hidden">
                <img class="h-36 w-full object-cover" src="{{ $course->image ? Storaga::url($course->image->url) : 'https://cdn.pixabay.com/photo/2016/12/28/09/36/web-1935737_960_720.png' }}" alt="">

                <div class="px-6 py-4">
                    <h1 class="text-xl text-gray-700 mb-2 leading-6">{{Str::limit($course->title, 40)}}</h1>
                    {{-- <p>Prof: {{$course->teacher->name}}</p> --}}


                <div class="flex">
                    <ul class="flex text-sm">
                        <li class="mr-1">
                            <i class="fas fa-star {{$course->rating>=1 ? 'text-yellow-400' : 'text-gray-400'}}"></i>
                        </li>
                        <li class="mr-1">
                            <i class="fas fa-star {{$course->rating>=2 ? 'text-yellow-400' : 'text-gray-400'}}"></i>
                        </li>
                        <li class="mr-1">
                            <i class="fas fa-star {{$course->rating>=3 ? 'text-yellow-400' : 'text-gray-400'}}"></i>
                        </li>
                        <li class="mr-1">
                            <i class="fas fa-star {{$course->rating>=4 ? 'text-yellow-400' : 'text-gray-400'}}"></i>
                        </li>
                        <li class="mr-1">
                            <i class="fas fa-star {{$course->rating==5 ? 'text-yellow-400' : 'text-gray-400'}}"></i>
                        </li>
                    </ul>

                    <p class="text-sm text-gray-500 ml-auto">
                        <i class="fas fa-users"></i>
                        ({{$course->students_count}})
                    </p>
                </div>

                <a href="{{route('courses.show', $course)}}" class="block text-center w-full mt-4 bg-gray-400 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded ">
                    Más información...
                </a>
            </div>

            </article>
        @endforeach
    </div>

    {{-- BARRA DE PAGINAS --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
        {{$courses->links()}}
    </div>

</div>
