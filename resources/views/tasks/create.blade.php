<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Task Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Task Create") }}
                </div>
            </div>
            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <div class="mt-4">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="first_name" class="block mt-1 w-full"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2"/>

                    <x-input-label for="user_id" :value="__('User Id')" />
                    <x-text-input id="user_id" class="block mt-1 w-full"
                        type="number"
                        name="user_id"
                        :value="old('user_id')"
                        required autocomplete="user_id" />
                    <x-input-error :messages="$errors->get('user_id')" class="mt-2"/>

                    <x-input-label for="deadline" :value="__('Deadline')" />
                    <x-text-input id="deadline" class="block mt-1 w-full"
                        type="date"
                        name="deadline"
                        :value="old('deadline')"
                        required autocomplete="deadline" />
                    <x-input-error :messages="$errors->get('deadline')" class="mt-2"/>

                <x-primary-button class="mt-4">
                    {{ __('Create') }}
                </x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>
