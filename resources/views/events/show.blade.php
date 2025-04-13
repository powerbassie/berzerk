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
                                <img class="rounded-lg shadow-lg object-cover object-center" src="{{ $event->image ? asset('storage/' . $event->image) : 'https://images.unsplash.com/photo-1470225620780-dba8ba36b745?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80' }}" alt="{{ $event->title }}" width="1184" height="1376">
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

{{--                    @if($event->artists->count() > 0)--}}
                        <div class="mt-8 border-t border-gray-200 pt-8">
                            <h2 class="text-xl font-bold text-gray-900">Line-up</h2>
                            <div class="mt-4 space-y-6">
{{--                                @foreach($event->artists as $artist)--}}
                                    <div class="flex">
{{--                                        @if($artist->image)--}}
                                            <div class="flex-shrink-0">
{{--                                                <img class="h-12 w-12 rounded-full" src="{{ asset('storage/' . $artist->image) }}" alt="{{ $artist->name }}">--}}
                                            </div>
{{--                                        @endif--}}
{{--                                        <div class="{{ $artist->image ? 'ml-4' : '' }}">--}}
{{--                                            <div class="text-sm font-medium text-gray-900">{{ $artist->name }}</div>--}}
{{--                                            @if($artist->bio)--}}
                                                <div class="mt-1 text-sm text-gray-500">
{{--                                                    {{ Str::limit($artist->bio, 100) }}--}}
                                                </div>
{{--                                            @endif--}}
                                        </div>
                                    </div>
{{--                                @endforeach--}}
                            </div>
                        </div>
{{--                    @endif--}}

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
