<div class="container mx-auto">
    <div class="flex flex-wrap justify-center gap-5">
        @foreach ($news as $item)
            <div class="flex mb-4 rounded-lg shadow-md bg-white w-[400px] h-[300px] flex-col overflow-hidden">
                <div class="w-full h-[200px]">
                    @if ($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full bg-gray-400 flex items-center justify-center text-white text-lg">No Image
                        </div>
                    @endif
                </div>
                <div class="p-4 flex-1 overflow-hidden">
                    <h1 class="text-xl font-semibold mb-2 truncate">{{ $item->name }}</h1>
                    <p class="text-gray-600 line-clamp-2">{{ $item->text }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>