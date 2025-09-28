<?php

use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $posts = Post::query()
            ->when($search, function ($query) use ($search) {
                return $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('content', 'like', '%' . $search . '%');
            })
            ->paginate(5);
        return view('posts.index', compact('posts'));
    }
}
