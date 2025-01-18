<x-app-layout>
    <div class="">
        <div class="max-w-full">
            <div class="bg-white dark:bg-[#0662CE] overflow-hidden">
                <x-welcome />
            </div>
            <h1 class="text-center text-white text-2xl font-bold mt-5">Последнии новости</h1>
            <div class="py-12">
                <div class="max-w-full mx-auto sm:px-6 lg:px-8">
                    <div class="overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6">
                            <div class="flex justify-center flex-wrap gap-6">
                                @foreach ($news->take(3) as $item)
                                    <div class="w-[400px] h-[300px] border-2 bg-white overflow-hidden">
                                        @if ($item->image)
                                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                                class="w-full h-[200px] object-cover">
                                        @else
                                            <div
                                                class="w-full h-[200px] bg-gray-400 flex items-center justify-center text-white">
                                                No Image</div>
                                        @endif
                                        <div class="p-4">
                                            <h3 class="text-xl font-semibold mb-2">{{ $item->name }}</h3>
                                            <p class="text-gray-600">{{ Str::limit($item->text, 100) }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <x-footer/>

        </div>
    </div>
</x-app-layout>