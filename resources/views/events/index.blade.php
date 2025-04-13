@extends('layouts.app')

@section('title', 'Alle Events')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center">
            <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                Alle Events
            </h1>
            <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                Ontdek alle aankomende evenementen en zorg dat je erbij bent!
            </p>
        </div>

        <div class="mt-12">
            <livewire:events-list />
        </div>
    </div>
@endsection
