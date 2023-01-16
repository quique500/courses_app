<x-app-layout>
    <section class="bg-gray-700 py-12 mb-12">
        <div class="conteiner grid grid-cols-1 lg:grid-cols-2 gap-2">
             {{-- imagen del curso --}}
            <figure>
                <img class="{{-- h-60 w-full object-cover --}}" src="{{$course->image ? Storaga::url($course->image->url) : 'https://cdn.pixabay.com/photo/2016/12/28/09/36/web-1935737_960_720.png'}}" alt="">
            </figure>

            {{-- datos del curso --}}
            <div class="text-white">
                <h1 class="text-4xl">{{$course->title}}</h1>
                <h2 class="text-xl mb-3">{{$course->subtitle}}</h2>
                <p class="mb-2"><i class="fas fa-chart-line"></i> Nivel: {{$course->level->name}}</p>
                <p class="mb-2"><i class=""></i> Categoría: {{$course->category->name}}</p>
                <p class="mb-2"><i class="fas fa-users"></i> Matriculados: {{$course->students_count}}</p>
                <p class="mb-2"><i class="fas fa-star"></i> Calificación: {{$course->rating}}</p>
            </div>
        </div>
    </section>

    {{-- DESCRIPCION DE LOS CURSOS --}}
    <div class="container grid grid-cols-3">
        <div class="col-span-2">

            {{-- METAS --}}
            <section class="card mb-12">
                <div class="card-body">
                    <h1 class="font-bold text-2xl mb-2">Lo que apremderás</h1>

                    <ul class="grid grid-cols-2 gap-x-6 gap-y-2">
                        @foreach ($course->goals as $goal)
                            <li class="text-gray-700 text-base"><i class="fas fa-check text-gray-600 mr-2"></i>{{$goal->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </section>

            {{-- TEMARIO --}}
            <section>
                <h1 class="font-fold text-3xl mb2">Temario</h1>

                @foreach ($course->sections as $section)
                    <article class="mb-4 shadow">
                        <header class="border border-gray-200 px-4 py-2 cursor-pointer bg-gray-200">
                            <h1 class="font-bold text-lg text-gray-600">{{$section->name}}</h1>
                        </header>

                        <div class="bg-white py-2 px-4">
                            <ul class="grid grid-cols-1 gap-2">
                                {{-- @foreach ($section->lessons as $lesson)
                                    <li class="text-gray-700 text-base"><i class=" fas fa-play-circle mr-2 text-gray-600"></i>{{$lesson->name}}</li>
                                @endforeach --}}
                            </ul>
                        </div>
                    </article>
                @endforeach
            </section>
        </div>

        <div>

        </div>
    </div>

</x-app-layout>


