<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Posts</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1 class="detailTitle">{{$post->title}}</h1>
        <div class="content">
            <div class="content_post">
                <h3>本文</h3>
                <p>{{$post->body}}</p>
            </div>
            <a href="/categories/{{$post->category->id}}">{{$post->category->name}}</a>
        </div>
        <div class="footer">
            <p class="edit">[<a href="/posts/{{$post->id}}/edit">編集</a>]</p>
            <a href="/">一覧に戻る</a>
        </div>
    </body>
</html>
</x-app-layout>