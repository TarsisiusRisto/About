<x-layout>
    <x-slot:title> {{ $title }}</x-slot:title>

    <article class="py-8 mx-w-screen-md">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-800">{{ $post ['title'] }}</h2>
            <div class="text-base text-gray-500">
            <a href="#">{{ $post ['author']}}</a> | 03 Maret 2025
        </div>
        <p class="my-4 font-light">{{ $post ['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
    </article>
</x-layout>
