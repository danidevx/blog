<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(40);
        // return $posts;

        return view('post.index', compact('posts'));

    }

    public function create()
    {
    return view('post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'categorias' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
    
        
        if (Post::where('title', $request->title)->exists()) {
            return redirect()->back()->withErrors(['title' => 'El título ya existe.']);
        }
    
        
        $post = new Post();
        $post->title = $request->title;
        $post->categorias = $request->categorias;
        $post->content = $request->content;
        $post->save();
    
        return redirect('/posts')->with('success', 'Post creado exitosamente.');
    }
    
    

    public function show($post)
    {
        $post = Post::find($post);


        return view('post.show', compact('post'));
    }
    public function edit($post)
    {
        $post = Post::find($post);


        return view('post.edit', compact('post'));
    }
   public function update(Request $request, $post)
    {
        
        $request->validate([
            'title' => 'required|string|max:255', 
            'categorias' => 'required|string|max:255', 
            'content' => 'required|string', 
        ]);

        
        $post = Post::find($post);

        
        if (!$post) {
            return redirect()->back()->withErrors(['post' => 'El post no fue encontrado.']);
        }

        
        $post->title = $request->title;
        $post->categorias = $request->categorias;
        $post->content = $request->content;

        
        $post->save();

        
        return redirect("/post/{$post->id}")->with('success', 'Post actualizado exitosamente.');
    }

    public function destroy($post)
    {
        $post = Post::find($post);

        $post->delete();
        

        return redirect('/posts');
    }
}
