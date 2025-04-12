<div>
    <h1 class="text-2xl font-bold mb-4">Evenementen Overzicht</h1>
    <ul>
        @foreach($events as $event)
            <li class="mb-2 p-4 bg-white rounded shadow">
                <h2 class="font-semibold">{{ $event->title }}</h2>
                <p>
                    @if($event->date)
                        {{ $event->date->format('d-m-Y') }}
                    @endif
                    - {{ $event->location }}
                </p>
            </li>
        @endforeach
    </ul>
</div>
