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
        <a href="/posts.create">create</a>
        <div class='posts'>
        	@foreach($posts as $post)
	        	<div class='post'>
	        		<a href = "/posts.{{ $post->id }}">
	        		    <h2 class='title'>{{ $post->title }}</h2>
	        		</a>
	        		<!--<a href="">{{ $post->category->name }}</a>-->
	        		<a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
	        		<p class='body'>{{ $post->body }}</p>
	        		<!--type指定がないとsubmit扱い-->
                    <form action="/posts.{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                    </form>
	        	</div>
        	@endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <div>
            <h2 class = 'loggedInUser'>ログインユーザー: {{ Auth::user()->name }}</h2>
        </div>
        
        <!--JS処理末尾に書くのは、最初にHTMLを読み込むことで処理速度を上げるため-->
        <script>
            function deletePost(id) {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
    </x-app-layout>
</html>
