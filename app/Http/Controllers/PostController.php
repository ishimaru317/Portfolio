<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest; 

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    { 
        $photo = $request->photo;
        if ($photo) {

            //一意のファイル名を自動生成しつつ保存し、かつファイルパス（$productImagePath）を生成
            //ここでstore()メソッドを使っているが、これは画像データをstorageに保存している
            $photoPath = $photo->store('public/uploads');
        } else {
            $photoPath = "";
        }
        $savedata = [
        'name' => $request->name,
        'photo' => $photoPath,
        'comment' => $request->comment,
        'category_id' => $request->category_id,
        'place_id'=> $request->place_id,
    ];
    logger($savedata);

    $post = new Post;
    $post->fill($savedata)->save();
        

        return redirect()->route('posts.show', ['id' => $post->id])->with('message', 'Post was successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('post.show', ['post' => Post::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect()->route('posts.show', ['id' => $post->id])->with('message', 'Post was successfully updated.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
