<x-master>
        <div class="grid grid-cols-4 gap-2">
            @foreach($cars as $car)
                <div>
                    <img class="container mx-auto px-4 rounded" src="{{ $car->image }}">
                </div>
            @endforeach
        </div>
</x-master>