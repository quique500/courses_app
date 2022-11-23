@props(['course'])      {{-- directiva para hacer referencia la nombre de la variable $course --}}

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
