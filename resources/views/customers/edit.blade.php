@extends('layouts.dashboard')

@section('content')
    <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Edit Customer</h2>
    <form action="{{ route('customers.update', $customer->id) }}" method="POST" enctype="multipart/form-data"
        class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md space-y-6">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                <input type="text" name="name" value="{{ $customer->name }}"
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg dark:bg-gray-900 dark:border-gray-700 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Website URL</label>
                <input type="url" name="website_url" value="{{ $customer->website_url }}"
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg dark:bg-gray-900 dark:border-gray-700 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div class="col-span-full">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Logo</label>
                <input type="file" name="logo"
                    class="mt-1 w-full text-sm text-gray-700 dark:text-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                @if($customer->logo)
                    <img src="{{ asset('storage/' . $customer->logo) }}" class="h-16 mt-3 rounded shadow">
                @endif
            </div>
        </div>

        <div class="pt-4 text-right">
            <button type="submit"
                class="px-6 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Update
            </button>
        </div>
    </form>
@endsection