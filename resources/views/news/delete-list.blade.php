<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-white leading-tight ">
			{{ __('Удаление новостей') }}
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class=" border-[1px] overflow-hidden shadow-xl sm:rounded-lg">
				<div class="p-6">
					@if (session('success'))
						<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
							<span class="block sm:inline">{{ session('success') }}</span>
						</div>
					@endif

					<table class="min-w-full divide-y divide-gray-200">
						<thead class="">
							<tr>
								<th class="px-6 py-3 text-left text-xs font-medium text-white border-[1px] uppercase tracking-wider">ID</th>
								<th class="px-6 py-3 text-left text-xs font-medium text-white border-[1px] uppercase tracking-wider">Название</th>
								<th class="px-6 py-3 text-left text-xs font-medium text-white border-[1px] uppercase tracking-wider">Действие</th>
							</tr>
						</thead>
						<tbody class="divide-y divide-gray-200">
							@foreach ($news as $item)
								<tr>
									<td class="px-6 py-4 whitespace-nowrap text-sm text-white border-[1px]">{{ $item->id }}</td>
									<td class="px-6 py-4 whitespace-nowrap text-sm text-white border-[1px]">{{ $item->name }}</td>
									<td class="px-6 py-4 border-[1px] whitespace-nowrap text-sm font-medium">
										<form action="{{ route('news.destroy', $item) }}" method="POST"
											onsubmit="return confirm('Вы уверены, что хотите удалить эту новость?');">
											@csrf
											@method('DELETE')
											<button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
												Удалить
											</button>
										</form>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>