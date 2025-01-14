<div class="">
    <div class="w-[400px] h-[300px] border-2 bg-white">
        <div class="w-[395px] h-[200px] bg-gray-400 text-center">Photo</div>
        <div>
            
                @foreach ($news)
                    <div class="border p-4 mb-4">
                        <h1 class="text-2xl pl-3 pt-3">{{ $item->name }}</h>
                            <p class="pl-3">{{ $item->text }}</p>
                            @if ($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="mt-2">
                            @endif
                    </div>
                @endforeach

        </div>
    </div>

</div>