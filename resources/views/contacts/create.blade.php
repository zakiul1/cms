
@extends('layouts.dashboard')

@section('content')
    <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Add Contact Message</h2>
    <form action="{{ route('contacts.store') }}" method="POST"
        class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md space-y-6">
        @csrf
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                <input type="text" name="name"
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg dark:bg-gray-900 dark:border-gray-700 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" name="email"
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg dark:bg-gray-900 dark:border-gray-700 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Message</label>
                <textarea name="message" rows="4"
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg dark:bg-gray-900 dark:border-gray-700 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    required></textarea>
            </div>
        </div>

        <div class="pt-4 text-right">
            <button type="submit"
                class="px-6 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Submit
            </button>
        </div>
    </form>
@endsection


