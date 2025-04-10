@extends('layouts.app')

@section('body')
    <div x-data="{ sidebarIsOpen: false }" class="relative flex w-full flex-col md:flex-row">
        <a class="sr-only" href="#main-content">skip to the main content</a>

        <!-- Sidebar Overlay -->
        <div x-cloak x-show="sidebarIsOpen" class="fixed inset-0 z-20 bg-black/30 backdrop-blur-sm md:hidden"
            aria-hidden="true" x-on:click="sidebarIsOpen = false" x-transition.opacity></div>

        <!-- Sidebar Navigation -->
        <nav x-cloak
            class="fixed left-0 z-30 flex h-screen w-60 shrink-0 flex-col border-r border-gray-200 bg-white p-4 transition-transform duration-300 md:w-64 md:translate-x-0 md:relative dark:border-gray-700 dark:bg-gray-800"
            x-bind:class="sidebarIsOpen ? 'translate-x-0' : '-translate-x-60'" aria-label="sidebar navigation">

            <!-- Logo -->
            <a href="#" class="ml-2 w-fit text-2xl font-bold text-gray-900 dark:text-white">
                <span class="sr-only">homepage</span>
                <span class="text-xl font-bold">Admin</span>
            </a>

            <!-- Search -->
            <div class="relative my-4 w-full max-w-xs">
                <input type="search"
                    class="w-full border border-gray-300 rounded bg-white px-3 py-2 pl-9 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                    name="search" aria-label="Search" placeholder="Search" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor"
                    class="absolute left-2 top-1/2 h-5 w-5 -translate-y-1/2 text-gray-500 dark:text-gray-300">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.2-5.2m0 0a7.5 7.5 0 10-10.6-10.6 7.5 7.5 0 0010.6 10.6z" />
                </svg>
            </div>

            <!-- Sidebar Links -->
            <div class="flex flex-col gap-2 overflow-y-auto pb-6">
                <a href="{{ route('dashboard') }}"
                    class="text-sm px-3 py-2 rounded transition-all font-medium
                          {{ request()->routeIs('dashboard') ? 'bg-blue-100 text-blue-700 dark:bg-blue-800 dark:text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300' }}">
                    Dashboard
                </a>

                <a href="{{ route('banners.index') }}"
                    class="text-sm px-3 py-2 rounded transition-all font-medium
                          {{ request()->routeIs('banners.*') ? 'bg-blue-100 text-blue-700 dark:bg-blue-800 dark:text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300' }}">
                    Banners
                </a>

                <a href="{{ route('site-settings.index') }}"
                    class="text-sm px-3 py-2 rounded transition-all font-medium
                          {{ request()->routeIs('site-settings.*') ? 'bg-blue-100 text-blue-700 dark:bg-blue-800 dark:text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300' }}">
                    Site Settings
                </a>

                <a href="{{ route('products.index') }}"
                    class="text-sm px-3 py-2 rounded transition-all font-medium
                          {{ request()->routeIs('products.*') ? 'bg-blue-100 text-blue-700 dark:bg-blue-800 dark:text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300' }}">
                    Products
                </a>

                <a href="{{ route('about-sections.index') }}"
                    class="text-sm px-3 py-2 rounded transition-all font-medium
                          {{ request()->routeIs('about-sections.*') ? 'bg-blue-100 text-blue-700 dark:bg-blue-800 dark:text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300' }}">
                    About Section
                </a>

                <a href="{{ route('customers.index') }}"
                    class="text-sm px-3 py-2 rounded transition-all font-medium
                          {{ request()->routeIs('customers.*') ? 'bg-blue-100 text-blue-700 dark:bg-blue-800 dark:text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300' }}">
                    Customers
                </a>

                <a href="{{ route('platforms.index') }}"
                    class="text-sm px-3 py-2 rounded transition-all font-medium
                          {{ request()->routeIs('platforms.*') ? 'bg-blue-100 text-blue-700 dark:bg-blue-800 dark:text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300' }}">
                    Platforms
                </a>

                <a href="{{ route('features.index') }}"
                    class="text-sm px-3 py-2 rounded transition-all font-medium
                          {{ request()->routeIs('features.*') ? 'bg-blue-100 text-blue-700 dark:bg-blue-800 dark:text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300' }}">
                    Features
                </a>

                <a href="{{ route('highlights.index') }}"
                    class="text-sm px-3 py-2 rounded transition-all font-medium
                          {{ request()->routeIs('highlights.*') ? 'bg-blue-100 text-blue-700 dark:bg-blue-800 dark:text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300' }}">
                    Highlights
                </a>

                <a href="{{ route('footers.index') }}"
                    class="text-sm px-3 py-2 rounded transition-all font-medium
                          {{ request()->routeIs('footers.*') ? 'bg-blue-100 text-blue-700 dark:bg-blue-800 dark:text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300' }}">
                    Footers
                </a>

                <a href="{{ route('contacts.index') }}"
                    class="text-sm px-3 py-2 rounded transition-all font-medium
                          {{ request()->routeIs('contacts.*') ? 'bg-blue-100 text-blue-700 dark:bg-blue-800 dark:text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300' }}">
                    Contact Messages
                </a>
            </div>

        </nav>

        <!-- Top Navbar & Main Content -->
        <div class="h-screen w-full overflow-y-auto bg-gray-50 dark:bg-gray-900">
            <!-- Top Navbar -->
            <nav
                class="sticky top-0 z-10 flex items-center justify-between border-b border-gray-200 bg-white px-4 py-2 dark:border-gray-700 dark:bg-gray-800">
                <!-- Sidebar Toggle -->
                <button type="button" class="md:hidden inline-block text-gray-700 dark:text-white"
                    x-on:click="sidebarIsOpen = true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-5 w-5">
                        <path
                            d="M0 3a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H2a2 2 0 01-2-2zm5-1v12h9a1 1 0 001-1V3a1 1 0 00-1-1zM4 2H2a1 1 0 00-1 1v10a1 1 0 001 1h2z" />
                    </svg>
                    <span class="sr-only">sidebar toggle</span>
                </button>

                <!-- Breadcrumb -->
        <x-back-button />


                <!-- Profile Menu -->
                <div class="hidden sm:flex sm:items-center">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-gray-500 dark:text-gray-300 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-white focus:outline-none">
                            <div>{{ Auth::user()->name }}</div>
                            <svg class="ml-2 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Fixed logout -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </x-slot>
                </x-dropdown>

                </div>
            </nav>

            <!-- Page Content -->
            <div id="main-content" class="p-4">
                <div class="overflow-y-auto">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
@endsection