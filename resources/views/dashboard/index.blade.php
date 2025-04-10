@extends('layouts.dashboard')

@section('content')
    <div class="space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
            <!-- Cards -->
            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
                <h3 class="text-sm text-gray-500 dark:text-gray-400">Total Banners</h3>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $counts['banners'] ?? 0 }}</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
                <h3 class="text-sm text-gray-500 dark:text-gray-400">Total Products</h3>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $counts['products'] ?? 0 }}</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
                <h3 class="text-sm text-gray-500 dark:text-gray-400">Contact Messages</h3>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $counts['contacts'] ?? 0 }}</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
                <h3 class="text-sm text-gray-500 dark:text-gray-400">Features</h3>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $counts['features'] ?? 0 }}</p>
            </div>
        </div>

        <!-- Recent Messages -->
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Recent Contact Messages</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-500 dark:text-gray-300">Name</th>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-500 dark:text-gray-300">Email
                            </th>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-500 dark:text-gray-300">Message
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @forelse($recentContacts as $contact)
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-800 dark:text-gray-100">{{ $contact->name }}</td>
                                <td class="px-4 py-2 text-sm text-gray-700 dark:text-gray-300">{{ $contact->email }}</td>
                                <td class="px-4 py-2 text-sm text-gray-600 dark:text-gray-400">
                                    {{ Str::limit($contact->message, 60) }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-4 py-2 text-center text-sm text-gray-500 dark:text-gray-400">No recent
                                    messages.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection