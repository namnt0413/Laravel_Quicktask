<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("User Create") }}
                </div>
            </div>
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="mt-4">
                    <x-input-label for="first_name" :value="__('First name')" />
                    <x-text-input id="first_name" class="block mt-1 w-full"
                        type="text"
                        name="first_name"
                        :value="old('first_name')"
                        required autocomplete="first_name" />
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2"/>

                    <x-input-label for="last_name" :value="__('Last Name')" />
                    <x-text-input id="last_name" class="block mt-1 w-full"
                        type="text"
                        name="last_name"
                        :value="old('last_name')"
                        required autocomplete="last_name" />
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2"/>

                    <x-input-label for="username" :value="__('Username')" />
                    <x-text-input id="username" class="block mt-1 w-full"
                        type="text"
                        name="username"
                        :value="old('username')"
                        required autocomplete="username" />
                    <x-input-error :messages="$errors->get('username')" class="mt-2"/>

                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required autocomplete="email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>

                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        :value="old('password')"
                        required autocomplete="password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                </div>
                <x-primary-button class="mt-4">
                    {{ __('Create') }}
                </x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>
