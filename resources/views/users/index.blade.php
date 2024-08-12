<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-between items-center">
                    {{ __("User list!") }}
                <a href="{{ route('users.create') }}" class="btn btn-success">Create New User</a>
            </div>
        </div>
            <br>
            <div class="overflow-x-auto">
                <table class="min-w-full w-full bg-white dark:bg-gray-800">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-700 text-center leading-4 text-gray-800 dark:text-gray-100 tracking-wider">Number</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-700 text-center leading-4 text-gray-800 dark:text-gray-100 tracking-wider">First Name</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-700 text-center leading-4 text-gray-800 dark:text-gray-100 tracking-wider">Last Name</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-700 text-center leading-4 text-gray-800 dark:text-gray-100 tracking-wider">Email</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-700 text-center leading-4 text-gray-800 dark:text-gray-100 tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800">
                        @foreach ($users as $index => $user)
                            <tr>
                                <td class="px-6 py-4 border-b border-gray-300 dark:border-gray-700 text-center text-gray-800 dark:text-gray-100">{{ ++$index }}</td>
                                <td class="px-6 py-4 border-b border-gray-300 dark:border-gray-700 text-center text-gray-800 dark:text-gray-100">{{ $user->first_name }}</td>
                                <td class="px-6 py-4 border-b border-gray-300 dark:border-gray-700 text-center text-gray-800 dark:text-gray-100">{{ $user->last_name }}</td>
                                <td class="px-6 py-4 border-b border-gray-300 dark:border-gray-700 text-center text-gray-800 dark:text-gray-100">{{ $user->email }}</td>
                                <td class="px-6 py-4 border-b border-gray-300 dark:border-gray-700 text-center">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
