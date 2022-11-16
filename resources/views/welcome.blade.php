{{-- extencion de la plantolla app en welcome con la siguiente herramineta --}}
<x-app-layout>
    {{-- seccion del titulo del curso --}}
    <section class="bg-cover" style="background-image: url({{asset('img/home/pexels-andrew-neel-4134791.jpg')}})">

        <div class="max-w-7xl mx-auto px-4 sm:px-60 lg:px-8 py-56">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-5xl">Dominando el desarrollo y programación con Q-Code; </h1>
                <p class="text-yellow-300 text.lg mt-3 mb-5">Domina el desarrollo y la programación con la ayuda de la plataforma Q-Code
                    donde aprenderás de forma rápida y sencilla con las herramientas adecuadas.</p>

                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search">
                    <button type="submit" class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2">
                        Buscar
                    </button>
                </div>
            </div>
        </div>

    </section>

    {{-- seccion del contenido del curso --}}
    <section class="mt-24">
        <h1 class="text-yellow-900 text-center text-3xl py-1">Contenido</h1>

        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/student-gffd374799_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-7000">Cursos</h1>
                </header>
                <p class="text-sm text-gray-500">  Alias laboriosam vel possimus. Iusto aperiam esse, totam assumenda et voluptates possimus tenetur blanditiis facere dolorem maxime debitis!
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/office-gc7f4a63b0_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-7000">Diseño web</h1>
                </header>
                <p class="text-sm text-gray-500">  Alias laboriosam vel possimus. Iusto aperiam esse, totam assumenda et voluptates possimus tenetur blanditiis facere dolorem maxime debitis!
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/mentor-g479e0acbf_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-7000">Asesorías</h1>
                </header>
                <p class="text-sm text-gray-500">  Alias laboriosam vel possimus. Iusto aperiam esse, totam assumenda et voluptates possimus tenetur blanditiis facere dolorem maxime debitis!
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/blog-gd0ff6b921_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-7000">Blog</h1>
                </header>
                <p class="text-sm text-gray-500">  Alias laboriosam vel possimus. Iusto aperiam esse, totam assumenda et voluptates possimus tenetur blanditiis facere dolorem maxime debitis!
            </article>
        </div>

    </section>

    {{-- seccion del catalogo de cursos --}}
    <section class="mt-24 bg-green-900 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabe qué curso llevar?</h1>
        <p class="text-center text-white">Contamos con un catálogo de cursos de acuerdo con el categoría o nivel de tu prferencia.</p>

        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="bg-gray-400 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded">
                Catálogo de cursos
            </a>
        </div>
    </section>

    {{-- catalogo de los ultimos cursos mostrados  --}}
    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">Últimos cursos</h1>

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
    </section>

</x-app-layout>
