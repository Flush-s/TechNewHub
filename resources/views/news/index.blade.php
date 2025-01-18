<x-app-layout>

    <div class="flex flex-col h-[calc(100vh-65px)]">
        <div class="flex-grow py-10">
            <div class="max-w-full mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6">
                        <x-card-news :news="$news" />
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full py-4">
            <div class="max-w-full mx-auto sm:px-6 lg:px-8">
                {{ $news->links() }}
            </div>
        </div>
    </div>
</x-app-layout>