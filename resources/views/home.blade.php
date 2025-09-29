@extends('layouts.app')

@section('title', 'Home - Laravel Tailwind')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-primary to-secondary rounded-lg shadow-xl p-8 mb-8 text-white">
            <div class="max-w-3xl">
                <h1 class="text-4xl font-bold mb-4">
                    Welcome to Laravel with Tailwind CSS
                </h1>
                <p class="text-xl mb-6 text-fourth-100">
                    Menggunakan custom color palette: Primary (#1B3C53), Secondary (#234C6A), Third (#456882), dan Fourth (#D2C1B6)
                </p>
                <div class="flex gap-4">
                    <button class="bg-third hover:bg-third-600 px-6 py-3 rounded-lg font-semibold transition-colors">
                        Get Started
                    </button>
                    <button class="border border-fourth-200 hover:bg-fourth-200 hover:text-primary px-6 py-3 rounded-lg font-semibold transition-colors">
                        Learn More
                    </button>
                </div>
            </div>
        </div>

        <!-- Color Palette Demo -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Primary Color -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-primary h-32"></div>
                <div class="p-4">
                    <h3 class="font-semibold text-primary mb-2">Primary</h3>
                    <p class="text-sm text-gray-600">#1B3C53</p>
                    <div class="mt-2 flex gap-1">
                        <div class="bg-primary-300 w-4 h-4 rounded"></div>
                        <div class="bg-primary-500 w-4 h-4 rounded"></div>
                        <div class="bg-primary-700 w-4 h-4 rounded"></div>
                    </div>
                </div>
            </div>

            <!-- Secondary Color -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-secondary h-32"></div>
                <div class="p-4">
                    <h3 class="font-semibold text-secondary mb-2">Secondary</h3>
                    <p class="text-sm text-gray-600">#234C6A</p>
                    <div class="mt-2 flex gap-1">
                        <div class="bg-secondary-300 w-4 h-4 rounded"></div>
                        <div class="bg-secondary-500 w-4 h-4 rounded"></div>
                        <div class="bg-secondary-700 w-4 h-4 rounded"></div>
                    </div>
                </div>
            </div>

            <!-- Third Color -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-third h-32"></div>
                <div class="p-4">
                    <h3 class="font-semibold text-third mb-2">Third</h3>
                    <p class="text-sm text-gray-600">#456882</p>
                    <div class="mt-2 flex gap-1">
                        <div class="bg-third-300 w-4 h-4 rounded"></div>
                        <div class="bg-third-500 w-4 h-4 rounded"></div>
                        <div class="bg-third-700 w-4 h-4 rounded"></div>
                    </div>
                </div>
            </div>

            <!-- Fourth Color -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-fourth h-32"></div>
                <div class="p-4">
                    <h3 class="font-semibold text-fourth-800 mb-2">Fourth</h3>
                    <p class="text-sm text-gray-600">#D2C1B6</p>
                    <div class="mt-2 flex gap-1">
                        <div class="bg-fourth-300 w-4 h-4 rounded"></div>
                        <div class="bg-fourth-500 w-4 h-4 rounded"></div>
                        <div class="bg-fourth-700 w-4 h-4 rounded"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-8">
            <h2 class="text-3xl font-bold text-primary mb-6 text-center">Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="text-center p-6 rounded-lg bg-fourth-50 border border-fourth-200">
                    <div class="bg-primary text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-primary mb-2">Fast Performance</h3>
                    <p class="text-gray-600">Built with Laravel and optimized for speed and performance.</p>
                </div>

                <div class="text-center p-6 rounded-lg bg-secondary-50 border border-secondary-200">
                    <div class="bg-secondary text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary mb-2">Customizable</h3>
                    <p class="text-gray-600">Easy to customize with Tailwind CSS and custom color palette.</p>
                </div>

                <div class="text-center p-6 rounded-lg bg-third-50 border border-third-200">
                    <div class="bg-third text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-third mb-2">Secure</h3>
                    <p class="text-gray-600">Built with security best practices and Laravel's robust framework.</p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center bg-gradient-to-r from-third to-primary rounded-lg shadow-xl p-8 text-white">
            <h2 class="text-3xl font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-xl mb-6 text-fourth-100">Explore the power of Laravel with our custom Tailwind CSS setup.</p>
            <button class="bg-fourth hover:bg-fourth-200 text-primary hover:text-primary-800 px-8 py-3 rounded-lg font-semibold text-lg transition-colors">
                Start Building
            </button>
        </div>
    </div>
@endsection