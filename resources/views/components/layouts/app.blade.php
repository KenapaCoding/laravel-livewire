<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
         @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="bg-red-500 px-4 xl:px-8 py-4 mb-8 text-white">
            <nav class="flex justify-between items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="white">
                    <path d="M13 2L3 14h9l-1 8L21 10h-9l1-8z"/>
                </svg>
                <ul class="flex gap-8 text-xl">
                    <li>
                        <a wire:navigate href="/posts">Posts</a>
                    </li>
                    <li>
                        <a wire:navigate href="/posts/create">Create Post</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
