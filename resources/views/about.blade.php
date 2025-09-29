@extends('layouts.app')

@section('title', 'About - Laravel Tailwind')

@section('content')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-primary mb-4">About Our Project</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Discover the power of Laravel combined with custom Tailwind CSS design system.
            </p>
        </div>

        <!-- Stats Section -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
            <div class="bg-gradient-to-br from-primary to-primary-700 text-white p-6 rounded-lg text-center">
                <div class="text-3xl font-bold mb-2">100+</div>
                <div class="text-primary-100">Components</div>
            </div>
            <div class="bg-gradient-to-br from-secondary to-secondary-700 text-white p-6 rounded-lg text-center">
                <div class="text-3xl font-bold mb-2">50+</div>
                <div class="text-secondary-100">Templates</div>
            </div>
            <div class="bg-gradient-to-br from-third to-third-700 text-white p-6 rounded-lg text-center">
                <div class="text-3xl font-bold mb-2">24/7</div>
                <div class="text-third-100">Support</div>
            </div>
            <div class="bg-gradient-to-br from-fourth-600 to-fourth-800 text-white p-6 rounded-lg text-center">
                <div class="text-3xl font-bold mb-2">99%</div>
                <div class="text-fourth-100">Uptime</div>
            </div>
        </div>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-12">
            <!-- Left Column -->
            <div>
                <h2 class="text-3xl font-bold text-secondary mb-6">Custom Color System</h2>
                <div class="space-y-6">
                    <div class="border-l-4 border-primary pl-6">
                        <h3 class="text-xl font-semibold text-primary mb-2">Primary (#1B3C53)</h3>
                        <p class="text-gray-600">Used for main navigation, primary buttons, and key brand elements. Provides
                            strong visual hierarchy and professional appearance.</p>
                    </div>

                    <div class="border-l-4 border-secondary pl-6">
                        <h3 class="text-xl font-semibold text-secondary mb-2">Secondary (#234C6A)</h3>
                        <p class="text-gray-600">Perfect for footer areas, secondary buttons, and supporting elements.
                            Complements the primary color beautifully.</p>
                    </div>

                    <div class="border-l-4 border-third pl-6">
                        <h3 class="text-xl font-semibold text-third mb-2">Third (#456882)</h3>
                        <p class="text-gray-600">Ideal for accent elements, hover states, and interactive components. Adds
                            depth to the color palette.</p>
                    </div>

                    <div class="border-l-4 border-fourth-600 pl-6">
                        <h3 class="text-xl font-semibold text-fourth-800 mb-2">Fourth (#D2C1B6)</h3>
                        <p class="text-gray-600">Excellent for backgrounds, subtle highlights, and creating warm, inviting
                            atmospheres in your designs.</p>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div>
                <h2 class="text-3xl font-bold text-third mb-6">Technical Features</h2>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div
                                class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-3 mt-0.5">
                                1</div>
                            <div>
                                <div class="font-semibold text-primary">Laravel Framework</div>
                                <div class="text-gray-600 text-sm">Latest version with all modern features and security
                                    updates.</div>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="bg-secondary text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-3 mt-0.5">
                                2</div>
                            <div>
                                <div class="font-semibold text-secondary">Tailwind CSS</div>
                                <div class="text-gray-600 text-sm">Utility-first CSS framework with custom color palette
                                    integration.</div>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="bg-third text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-3 mt-0.5">
                                3</div>
                            <div>
                                <div class="font-semibold text-third">Blade Templates</div>
                                <div class="text-gray-600 text-sm">Powerful templating engine for creating reusable
                                    components.</div>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="bg-fourth-700 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-3 mt-0.5">
                                4</div>
                            <div>
                                <div class="font-semibold text-fourth-800">Vite Integration</div>
                                <div class="text-gray-600 text-sm">Fast build tool for modern web development workflow.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Color Samples -->
                <div class="mt-8">
                    <h3 class="text-xl font-semibold text-primary mb-4">Color Variations</h3>
                    <div class="grid grid-cols-4 gap-2">
                        <!-- Primary variations -->
                        <div class="space-y-2">
                            <div class="bg-primary-200 h-8 rounded"></div>
                            <div class="bg-primary-500 h-8 rounded"></div>
                            <div class="bg-primary-800 h-8 rounded"></div>
                        </div>
                        <!-- Secondary variations -->
                        <div class="space-y-2">
                            <div class="bg-secondary-200 h-8 rounded"></div>
                            <div class="bg-secondary-500 h-8 rounded"></div>
                            <div class="bg-secondary-800 h-8 rounded"></div>
                        </div>
                        <!-- Third variations -->
                        <div class="space-y-2">
                            <div class="bg-third-200 h-8 rounded"></div>
                            <div class="bg-third-500 h-8 rounded"></div>
                            <div class="bg-third-800 h-8 rounded"></div>
                        </div>
                        <!-- Fourth variations -->
                        <div class="space-y-2">
                            <div class="bg-fourth-200 h-8 rounded"></div>
                            <div class="bg-fourth-500 h-8 rounded"></div>
                            <div class="bg-fourth-800 h-8 rounded"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-gradient-to-r from-primary via-secondary to-third rounded-xl shadow-2xl p-8 text-white text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Start Building?</h2>
            <p class="text-lg mb-6 text-blue-100">
                Explore our comprehensive documentation and start creating amazing applications today.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#"
                    class="bg-fourth hover:bg-fourth-200 text-primary hover:text-primary-800 px-8 py-3 rounded-lg font-semibold transition-colors">
                    View Documentation
                </a>
                <a href="#"
                    class="border-2 border-fourth-200 hover:bg-fourth-200 hover:text-primary px-8 py-3 rounded-lg font-semibold transition-colors">
                    Live Examples
                </a>
            </div>
        </div>
    </div>
@endsection
