<?php


namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function create()
    {
        return view('blog.create');
    }



    public function add()
    {
        return view('blog.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'category' => 'required|string|max:100',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB limit
        'content' => 'required|string',
        'published_at' => 'required|date',
    ]);

    // Store Image in public disk (accessible via storage link)
    $imagePath = $request->file('image')->store('blogs', 'public');

    Blog::create([
        'title' => $request->title,
        'category' => $request->category,
        'image' => 'storage/' . $imagePath, // Ensure correct URL
        'content' => $request->content,
        'published_at' => $request->published_at,
    ]);

    return redirect()->route('blog.index')->with('success', 'Article posted successfully!');
}

public function index()
{
    $blogs = Blog::latest()->paginate(9);
    return view('blog.index', compact('blogs'));
}

public function show($id)
{
    $blog = Blog::findOrFail($id); // Fetch blog post or return 404
    return view('blog.show', compact('blog')); // Pass data to the view
}


}






// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Blog;

// class BlogController extends Controller
// {
//     public function index()
//     {
//         $blogs = Blog::latest()->paginate(6);
//         return view('blog.index', compact('blogs'));
//     }

//     public function show($id)
//     {
//         $blog = Blog::findOrFail($id);
//         return view('blog.show', compact('blog'));
//     }
// }

