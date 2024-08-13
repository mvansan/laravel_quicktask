<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Edit User Details") }}
                </div>
            </div>

            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mt-4">
                    <x-input-label for="first_name" :value="__('First Name')" />
                    <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" value="{{ old('first_name', $user->firstname) }}" required autofocus />
                    <x-input-error :message="$errors->first('first_name')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="last_name" :value="__('Last Name')" />
                    <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" value="{{ old('last_name', $user->lastname) }}" required />
                    <x-input-error :message="$errors->first('last_name')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email', $user->email) }}" required />
                    <x-input-error :message="$errors->first('email')" class="mt-2" />
                </div>

                <x-primary-button class="mt-4">
                    {{ __('Update') }}
                </x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>
