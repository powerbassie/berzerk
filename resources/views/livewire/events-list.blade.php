<div>
    <div class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between">

        <div class="flex items-center space-x-4">
            <span class="text-sm text-gray-500">Sorteren op:</span>
            <button wire:click="sortBy('date')" class="px-3 py-2 text-sm font-medium {{ $sortField === 'date' ? 'text-primary-600' : 'text-gray-500 hover:text-gray-700' }}">
                Datum
                @if($sortField === 'date')
                    @if($sortDirection === 'asc')
                        <svg class="inline-block w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                        </svg>
                    @else
                        <svg class="inline-block w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    @endif
                @endif
            </button>

        </div>
    </div>
{{--@dd($events);--}}
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        @forelse($events as $event)

            <livewire:event-card :event="$event" :key="$event->id" />
        @empty
            <div class="col-span-full text-center py-12">
                <h3 class="text-lg font-medium text-gray-900">Geen events gevonden</h3>
                <p class="mt-1 text-sm text-gray-500">Probeer andere zoektermen of kom later terug.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-8">
        {{ $events->links() }}
    </div>
</div>
