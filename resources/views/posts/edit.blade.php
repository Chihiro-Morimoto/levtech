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

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{$post -> id}}" method="POST">
            @csrf
            @method("PUT")
            <div class="content_title">
                <h2>タイトル</h2>
                <input type = "text" name="post[title]" value="{{ $post->title }}"/>
            </div>                                                                                                                                      
            <div class="content_body">
                <h2>本文</h2>
                <textarea name = "post[body]">{{$post->body}}</textarea>
            </div>
            <input type="submit" value="update"/>
        </form>
        <div class="footer">
            <a href="/posts/{{$post -> id}}">戻る</a>
        </div>
        </div>
    </body>
</html>
</x-app-layout>