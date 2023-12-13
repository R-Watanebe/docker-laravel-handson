<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * 投稿一覧を表示
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::with(['comments'])->orderBy('created_at', 'desc')->paginate(10);

        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * 新規投稿画面を表示
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * 新規投稿を保存
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $params = $request->validate([
            'title' => 'required|max:50',
            'body' => 'required|max:2000',
        ]);

        Post::create($params);

        return redirect()->route('top');
    }

    /**
     * 投稿詳細を表示
     *
     * @param  int  $post_id
     * @return \Illuminate\View\View
     */
    public function show($post_id)
    {
        $post = Post::findOrFail($post_id);

        return view('posts.show', [
            'post' => $post,
        ]);
    }

    /**
     * 投稿編集画面を表示
     *
     * @param  int  $post_id
     * @return \Illuminate\View\View
     */
    public function edit($post_id)
    {
        $post = Post::findOrFail($post_id);

        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    /**
     * 投稿を更新
     *
     * @param  int  $post_id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($post_id, Request $request)
    {
        $params = $request->validate([
            'title' => 'required|max:50',
            'body' => 'required|max:2000',
        ]);

        $post = Post::findOrFail($post_id);
        $post->fill($params)->save();

        return redirect()->route('posts.show', ['post' => $post]);
    }

    /**
     * 投稿を削除
     *
     * @param  int  $post_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($post_id)
    {
        $post = Post::findOrFail($post_id);
    
        DB::transaction(function () use ($post) {
            $post->comments()->delete();
            $post->delete();
        });
    
        return redirect()->route('top');
    }    

}