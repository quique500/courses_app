@props(['course'])      {{-- directiva para hacer referencia la nombre de la variable $course --}}

<article class="card">
    <img class="h-36 w-full object-cover" src="{{ $course->image ? Storaga::url($course->image->url) : 'https://cdn.pixabay.com/photo/2016/12/28/09/36/web-1935737_960_720.png' }}" alt="">

    <div class="card-body">
        <h1 class="card-title">{{Str::limit($course->title, 40)}}</h1>
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

        <a href="{{route('courses.show', $course)}}" class="mt-4 btn btn-primary btn-block">
            Más información...
        </a>
    </div>

</article>
