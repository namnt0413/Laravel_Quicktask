<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Task List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Task List") }}
                </div>
            </div>
            <x-primary-button class="mt-4">
                {{__('Create New Task')}}
            </x-primary-button>
            <table class="table w-full mt-4">
                <thead>
                    <tr>
                        <th class="text-gray-900 dark:text-gray-100" scope="col"> # </th>
                        <th class="text-gray-900 dark:text-gray-100" scope="col"> {{ __("Task Name") }} </th>
                        <th class="text-gray-900 dark:text-gray-100" scope="col"> {{ __("Deadline")}} </th>
                        <th class="text-gray-900 dark:text-gray-100" scope="col"> {{ __("Action") }} </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user->tasks as $index => $task)
                        <tr>
                            <th class="text-gray-900 dark:text-gray-100 text-center" scope="row">{{ ++$index  }}</th>
                            <td class="text-gray-900 dark:text-gray-100 text-center">{{ $task->name }}</td>
                            <td class="text-gray-900 dark:text-gray-100 text-center">{{ $task->deadline }}</td>
                            <td class="text-gray-900 dark:text-gray-100 text-center">
                                <x-secondary-button class="mt-4" onclick="location.href='{{ route('tasks.show', ['task' => $task->id]) }}'">
                                    {{__('Show')}}
                                </x-secondary-button>
                                <x-primary-button class="mt-4" onclick="location.href='{{ route('tasks.edit', ['task' => $task->id]) }}'">
                                    {{__('Edit')}}
                                </x-primary-button>
                                <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('delete')
                                    <x-danger-button class="mt-4">
                                        {{ __("Delete") }}
                                    </x-danger-button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
