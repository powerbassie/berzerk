<div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
        <div class="flex-1">
            <a href="{{ route('events.show', $event) }}" class="block">
                <p class="text-xl font-semibold text-gray-900">{{ $event->name }}</p>
                <p class="mt-3 text-base text-gray-500">
                    Genre: {{ $event->genre }}
                </p>
            </a>
        </div>
        <div class="mt-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-2 text-sm text-gray-500">
                    {{ $event->date->format('d-m-Y') }}
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
            <div class="mt-2 flex items-center">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-2 text-sm text-gray-500">
                    Tickets: {{ $event->ticket_count }}
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('events.show', $event) }}" class="text-primary-600 hover:text-primary-500 font-medium">
                    Meer details &rarr;
                </a>
            </div>
        </div>
    </div>
</div>
