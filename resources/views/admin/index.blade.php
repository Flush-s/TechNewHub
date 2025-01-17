<x-app-layout>
    

    <div class="py-12 text-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="border-[1px] overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Registered Users</h3>
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-[1px] rounded-lg text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 border-[1px] rounded-lg text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 border-[1px] rounded-lg text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>

                                <th class="px-6 py-3 border-[1px] rounded-lg text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Admin</th>
                                <th class="px-6 py-3 border-[1px] rounded-lg text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Registered At</th>
                                <th class="px-6 py-3 border-[1px] rounded-lg text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($users as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap 
                                    border-[1px] rounded-lg text-sm text-white">{{ $user->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap  border-[1px] rounded-lg text-sm font-medium text-white">{{ $user->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap 
                                    border-[1px] rounded-lg text-sm text-white">{{ $user->email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap border-[1px] rounded-lg text-sm text-white">{{ $user->is_admin ? 'Yes' : 'No' }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap  border-[1px] rounded-lg text-sm text-white">{{ $user->created_at->format('Y-m-d H:i:s') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap border-[1px] rounded-lg text-sm font-medium">
                                        <a href="{{ route('admin.users.edit', $user) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
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