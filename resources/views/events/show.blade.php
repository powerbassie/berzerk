@extends('layouts.app')

@section('title', $event->title)

@section('content')

    <div class="bg-white overflow-hidden">
        <div class="relative max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="hidden lg:block bg-gray-50 absolute top-0 bottom-0 left-3/4 w-screen"></div>
            <div class="mx-auto text-base max-w-prose lg:grid lg:grid-cols-2 lg:gap-8 lg:max-w-none">
                <div>
                    <h2 class="text-base text-primary-600 font-semibold tracking-wide uppercase">Event</h2>
                    <h1 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">{{ $event->title }}</h1>
                    <div class="mt-4 flex items-center">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-2 text-sm text-gray-500">
                            {{ $event->date->format('d-m-Y') }} | {{ $event->time }}
                        </div>
                    </div>
                    <div class="mt-2 flex items-center">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-2 text-sm text-gray-500">
                            {{ $event->location }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 lg:grid lg:grid-cols-2 lg:gap-8">
                <div class="relative lg:row-start-1 lg:col-start-2">
                    <div class="relative text-base mx-auto max-w-prose lg:max-w-none">
                        <figure>
                            <div class="aspect-w-12 aspect-h-7 lg:aspect-none">
                                <img class="rounded-lg shadow-lg object-cover object-center" src="{{ $event->image ? asset('storage/' . $event->image) : 'https://scontent.frtm1-2.fna.fbcdn.net/v/t39.30808-6/488195832_1162863158970990_2503064024759036818_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=3aicbZ-bhV0Q7kNvwHlIBOW&_nc_oc=AdmVoAIFQp461lP2H5WFqdzfQD1K-CBRTrt0_IPOU05nFZqj5WjLBxWIuHiHqkzJMkY&_nc_zt=23&_nc_ht=scontent.frtm1-2.fna&_nc_gid=VfxKy_0ZYfbfWCg3RddYzw&oh=00_AfGerHE1opdmcvGSsJq1ZTmSjR9eVi8OIuUwTQKSt0f4ew&oe=6801CD1C' }}" alt="{{ $event->title }}" width="1184" height="1376">
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="mt-8 lg:mt-0">
                    <div class="text-base max-w-prose mx-auto lg:max-w-none">
                        <div class="prose prose-primary prose-lg text-gray-500 mx-auto lg:max-w-none">
                            {!! $event->description !!}
                        </div>
                    </div>

                    <h2>Artiesten</h2>
                    <ul>
                        @foreach ($event->lineups as $lineup)
                            <li>
                               -  {{ $lineup->artist_name }} ({{ $lineup->start_time }} - {{ $lineup->end_time }})
                            </li>
                        @endforeach

                    <div class="mt-8">
                        <a href="{{ route('events.index') }}" class="text-primary-600 hover:text-primary-500">
                            &larr; Terug naar alle events
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
