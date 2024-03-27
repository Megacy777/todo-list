<section class="bg-dark blue-300 p-4 mb-6">
    <div class="container">
        <h2 class="title">Tausi Trade</h2>
        <p class="subtitle">Karibu sana to our vibrant online marketplace.</p>
        <!-- Add more content here -->
        {{ $slot }}
    </div>
</section>


<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif