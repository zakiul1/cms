@extends('layouts.dashboard')

@section('content')
    <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Add Highlight</h2>
    <form action="{{ route('highlights.store') }}" method="POST" enctype="multipart/form-data"
        class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md space-y-6">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
                <input type="text" name="title"
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg dark:bg-gray-900 dark:border-gray-700 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    required>
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Content</label>
                <textarea name="content" rows="4"
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg dark:bg-gray-900 dark:border-gray-700 focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Image</label>
                <input type="file" name="image"
                    class="mt-1 w-full text-sm text-gray-700 dark:text-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            </div>
        </div>

        <div class="pt-4 text-right">
            <button type="submit"
                class="px-6 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Save
            </button>
        </div>
    </form>
@endsection



