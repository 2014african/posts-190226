<?php
 
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\Post;
 
class PostController extends Controller
{
    public function create() 
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // return $reqeust;

        Post::create([
            'name' => $request->input('name'),
            'content' => $request->input('content'),
          ]);
           return redirect('/posts');
    }
    public function index()
    {
        // return Post::all();
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }
}

