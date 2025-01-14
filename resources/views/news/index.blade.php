<x-app-layout>
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center gap-5">
            @foreach ($news as $item)
                <div class="flex mb-4 rounded-lg shadow-md bg-white w-[400px] h-[300px] flex flex-col">
                    <div class="w-[400px] h-[200px]">
                        @if ($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-full h-full object-cover rounded-lg">
                        @endif
                    </div>
                    <div class=" p-4">
                        <h1 class="text-xl font-semibold">{{ $item->name }}</h1>
                        <p class="text-gray-600">{{ $item->text }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>