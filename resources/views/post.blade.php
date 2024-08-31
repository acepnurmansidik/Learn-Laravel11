<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-5 max-w-screen-md border-b border-x-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post["title"] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post["author"] }}</a> | 31 Agustus 2024
        </div>
        <p class="my-4 font-light">{{ $post["body"], 100 }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to post</a>
    </article>
</x-layout>