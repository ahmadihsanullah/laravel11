<x-layout>
    <x-slot:title>{{ $title }}</x-slot:t>

    <article class="py-8 max-w-screen-md ">
      <a href="/post/{{ $post['slug'] }}">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-black-300">{{ $post['title'] }}</h2>
      </a>
      <div class="text-base text-gray-500 ">
        <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
      </div>
      <p class="my-4 font-light">{{ $post['body'] }}</p>
      <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; back</a>
    </article>

   
  </x-layout>