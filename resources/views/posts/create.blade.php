<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type = "text" name="post[title]" placeholder="タイトル" value="{{old("post.title")}}"/>
                <p class="title_error" style="color:red">{{$errors -> first("post.title")}}</p>
            </div>                                                                                                                                      
            <div class="body">
                <h2>本文</h2>
                <textarea name="post[body]" placeholder="今日も１日お疲れさまでした！">{{old("post.body")}}</textarea>
                <p class="body_error" style="color:red">{{$errors -> first("post.body")}}</p>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>