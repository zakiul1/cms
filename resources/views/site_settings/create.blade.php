@extends('layouts.dashboard')

@section('content')
    <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Add New Site Setting</h2>
    <form action="{{ route('site-settings.store') }}" method="POST"
        class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md space-y-6">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="col-span-full">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Setting Key</label>
                <input type="text" name="key"
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg dark:bg-gray-900 dark:border-gray-700 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    required>
            </div>
            <div class="col-span-full">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Setting Value</label>
                <textarea name="value" rows="4"
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg dark:bg-gray-900 dark:border-gray-700 focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
            </div>
        </div>

        <div class="pt-4 text-right">
            <button type="submit"
                class="px-6 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Save Setting
            </button>
        </div>
    </form>
@endsection



