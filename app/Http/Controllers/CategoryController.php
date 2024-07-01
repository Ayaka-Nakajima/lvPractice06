<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Category;

class CategoryController extends Controller
{
    //インポートしたPostをインスタンス化して$postとして使用。
    public function index(Category $category)
    {
        return view('categories.index')->with(['posts' => $category->getByCategory()]);
    }
    // public function show(Post $post)
    // {
    //     //dd($post);
    //     return view('posts.show')->with(['post' => $post]);
    // }
    // // public function create()
    // // {
    // //     return view('posts.create');
    // // }
    
    // public function store(PostRequest $request, Post $post)
    // {
    //     //dd($request->all());
    //     $input = $request['post'];
    //     $post -> fill($input) -> save();//インサート構文の実行
    //     return redirect('/posts.' . $post->id);
    // }
    
    // public function edit(Post $post)
    // {
    //     return view('posts.edit')->with(['post'=> $post]);
    // }
    
    // public function update(PostRequest $request, Post $post)
    // {
    //     $input_post = $request['post'];
    //     $post->fill($input_post)->save();
        
    //     return redirect('/posts.' . $post->id);
    // }
    
    // public function delete(Post $post)
    // {//論理削除を行いたい
    //     $post->delete();
    //     return redirect('/');
    // }
    
    // public function create(Category $category)
    // {
    //     return view('posts.create')->with(['categories' => $category->get()]);
    // }
}
//use宣言は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。
/**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */
?>