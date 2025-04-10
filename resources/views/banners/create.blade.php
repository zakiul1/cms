@extends('layouts.dashboard')

@section('content')
    <div class="max-w-2xl mx-auto bg-white dark:bg-gray-800 p-6 rounded-lg shadow" x-data="{ imageUrl: null }">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">Create Banner</h2>

        <form method="POST" action="{{ route('banners.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Title -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
                <input type="text" name="title"
                    class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                    required>
            </div>

            <!-- Subtitle -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Subtitle</label>
                <input type="text" name="subtitle"
                    class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
            </div>

            <!-- Button 1 -->
            <div class="mb-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Button 1 Text</label>
                    <input type="text" name="button1_text"
                        class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Button 1 URL</label>
                    <input type="url" name="button1_url"
                        class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                </div>
            </div>

            <!-- Button 2 -->
            <div class="mb-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Button 2 Text</label>
                    <input type="text" name="button2_text"
                        class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Button 2 URL</label>
                    <input type="url" name="button2_url"
                        class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                </div>
            </div>

            <!-- Modern Image Upload -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Banner Image</label>
                <div class="flex items-center justify-center w-full px-4 py-6 bg-gray-50 dark:bg-gray-700 border-2 border-dashed border-gray-300 dark:border-gray-500 rounded-md cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600"
                    @click="$refs.imageInput.click()">
                    <template x-if="!imageUrl">
                        <span class="text-gray-500 dark:text-gray-400 text-sm">Click to upload or drag & drop</span>
                    </template>
                    <template x-if="imageUrl">
                        <img :src="imageUrl" class="h-40 w-auto object-cover rounded-md shadow">
                    </template>
                    <input type="file" name="image" accept="image/*" class="hidden" x-ref="imageInput" @change="
                                const file = $event.target.files[0];
                                if (file) {
                                    const reader = new FileReader();
                                    reader.onload = e => imageUrl = e.target.result;
                                    reader.readAsDataURL(file);
                                }
                           ">
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md">
                Save Banner
            </button>
        </form>
    </div>
@endsection