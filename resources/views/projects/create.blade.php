<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="flex justify-between">
                    <div class="max-w-xl">
                        <caption
                            class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            Create new Project
                        </caption>
                    </div>
                    <div class="max-w-xl">
                        <a href="{{ route('projects.index') }}" class="font-medium text-blue-600 hover:underline">
                            Back to List Projects
                        </a>
                    </div>
                </div>

                <div class="bg-white overflow-hidden mt-8 px-2">
                    <div class="bg-white">
                        <!-- Project Form -->
                        <form action="{{ route('projects.store') }}" method="POST">
                            @csrf

                            <!-- Project Name -->
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-semibold text-sm mb-2">Project
                                    Name</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400
                                ">
                            </div>

                            <!-- Project Description -->
                            <div class="mb-4">
                                <label for="description"
                                    class="block text-gray-700 font-semibold text-sm mb-2">Description</label>
                                <textarea name="description" id="description" rows="5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400
                                    "></textarea>
                            </div>

                            <!-- Start Date -->
                            <div class="mb-4">
                                <label for="start_date" class="block text-gray-700 font-semibold text-sm mb-2">Start
                                    Date</label>
                                <input type="date" name="start_date" id="start_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400
">
                            </div>

                            <!-- End Date -->
                            <div class="mb-4">
                                <label for="end_date" class="block text-gray-700 font-semibold text-sm mb-2">End
                                    Date</label>
                                <input type="date" name="end_date" id="end_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400
">
                            </div>

                            <!-- Submit Button -->
                            <div class="mb-4">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-semibold text-sm py-2 px-4 rounded">Create
                                    Project</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>