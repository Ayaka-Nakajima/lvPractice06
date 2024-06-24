<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="posts", method="POST">
            @csrf <!--raravelセキュリティ担保のため、Laravel用に定義されたタグ-->
            <div class="title">
                <h2>Title</h2>
                <input type="text" name=post[title] placeholder = "タイトル" value = {{old('post.title')}}>
                <p class = 'title__eorror' style = "color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class = "body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder = "今日も一日お疲れさまでした" value = {{old('post.body')}}></textarea>
                <p class = 'body__eorror' style = "color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="store"><!--送信のリクエスト-->
            
        </form>
        <div class = 'footer'>
            <a href = "/">戻る</a>
        </div>
    </body>
</html>
