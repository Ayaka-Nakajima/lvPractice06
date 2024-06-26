<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    
    </head>
    <x-app-layout>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts.{{ $post->id }}", method="POST">
            @csrf <!--raravelセキュリティ担保のため、Laravel用に定義されたタグ-->
            @method('PUT')<!--Laravel 公式ドキュメントブレードのあたり参照-->
            <div class="title">
                <h2>Title</h2>
                <input type="text" name=post[title] placeholder = "タイトル" value={{$post->title}}>
                <p class = 'title__eorror' style = "color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class = "body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder = "今日も一日お疲れさまでした">{{$post->body}}</textarea>
                <p class = 'body__eorror' style = "color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="update"><!--送信のリクエスト-->
            
        </form>
        <div class = 'footer'>
            <a href = "/posts.{{ $post->id }}">戻る</a>
        </div>
    </body>
    </x-app-layout>
</html>
