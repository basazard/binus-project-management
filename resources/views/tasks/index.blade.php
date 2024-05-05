<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="mb-4">
                    <label for="search" class="block text-gray-700 font-semibold text-sm mb-2">Search</label>
                    <input type="text" name="search" id="search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400"
                        placeholder="Search tasks...">
                </div>
                <div class="flex justify-between">
                    <div class="max-w-xl">
                        <caption
                            class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            List Tasks
                        </caption>
                    </div>
                    <div class="max-w-xl">
                        <a href="{{ route('tasks.create') }}" class="font-medium text-blue-600 hover:underline">
                            Create new Task
                        </a>
                    </div>
                </div>

                <div class="relative overflow-x-auto shadow-md border border-gray-200 sm:rounded-lg mt-8">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Task
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Description
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Start Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    End Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Assigned To
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $task->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $task->description }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $task->start_date }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $task->end_date }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $task->status }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $task->user->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $task->status }}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <a href="{{ route('tasks.show', $task->id) }}"
                                        class="font-medium text-blue-600 hover:underline">Show</a>
                                    <a href="{{ route('tasks.edit', $task->id) }}"
                                        class="font-medium text-blue-600 hover:underline">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-6">
                    {{ $tasks->links() }}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>