<x-app-layout>
	<div class="flex justify-center mt-[250px]">
		<div class="border-[1px] rounded-lg px-20 py-[100px]">
			<form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
				@csrf

				<div>
					<x-label for="name" value="{{ __('Название Новости') }}" />
					<x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus
						autocomplete="name" />
				</div>

				<div class="mt-4">
					<x-label for="text" value="{{ __('Текст') }}" />
					<x-input id="text" class="block mt-1 w-full" type="text" name="text" :value="old('text')" required />
				</div>

				<div class="mt-4">
					<x-label for="image" value="{{ __('Фото') }}" />
					<x-input id="image" class="block mt-1 w-full" type="file" name="image" /> <!-- Изменено на "image" -->
				</div>

				<x-button class="mt-4">
					{{ __('Создать Новость') }}
				</x-button>
			</form>
		</div>
	</div>
</x-app-layout>