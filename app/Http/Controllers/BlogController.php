<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = DB::table('posts')->where('is_published', true)
        ->join('users', 'posts.author_id', '=', 'users.id')
        ->select('posts.*', 'users.name as author_name')
        ->orderBy('published_at', 'desc')
        ->paginate(3);
        $total = DB::table('posts')->where('is_published', true)->count();
        return view('blog', [
            'seo' => [
                'title' => 'Blog - Arang Tempurung Kelapa Premium | Export Quality',
                'description' => 'Blog resmi produsen arang tempurung kelapa Indonesia kualitas ekspor',
                'keywords' => 'blog arang kelapa, charcoal blog, coconut charcoal blog',
                'image' => asset('images/briket.jpeg')
            ],
            'blogs' => $blogs,
            'total' => $total
        ]);
    }

    public function load_more(Request $request)
    {
        $offset = $request->offset;
        $blogs = DB::table('posts')->where('is_published', true)
        ->join('users', 'posts.author_id', '=', 'users.id')
        ->select('posts.*', 'users.name as author_name')
        ->orderBy('published_at', 'desc')
        ->offset($offset)
        ->limit(3)
        ->get();
        return view('blog-card', compact('blogs'))->render();
    }

    public function detail($slug)
    {
        // Logic to fetch blog post by slug can be added here
        $blog = DB::table('posts')
        ->join('users', 'posts.author_id', '=', 'users.id')
        ->select('posts.*', 'users.name as author_name')
        ->where('slug', $slug)
        ->where('is_published', true)
        ->first();
        return view('blog-detail', [
            'seo' => [
                'title' => 'Blog Post Title - Arang Tempurung Kelapa Premium | Export Quality',
                'description' => 'Detailed blog post about arang tempurung kelapa Indonesia kualitas ekspor',
                'keywords' => 'blog post arang kelapa, charcoal blog post, coconut charcoal blog post',
                'image' => asset('images/briket.jpeg')
            ],
            'blog' => $blog
            ]);
    }

    public function data(Request $request)
    {
        $query = DB::table('posts')->where('is_published', true)->orderBy('published_at', 'desc');
        return DataTables::of($query)
        ->addIndexColumn()
        ->addColumn('action', function ($row) {
            $btnEdit = '<a href="'.route('blog.edit', $row->id).'" class="btn btn-sm btn-outline-warning">Edit</a>';
            $btnDelete = '<button class="btn btn-sm btn-outline-danger btn-delete" data-id="'.$row->id.'">Delete</button>';
            return $btnEdit . ' ' . $btnDelete;
        })
        ->editColumn('published_at', function ($row) {
            return date('Y-m-d H:i', strtotime($row->published_at));
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function list()
    {
        return view('blog.index');
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'is_published' => 'sometimes|boolean',
        ]);
        $slug = \Str::slug($validated['title']);
        $imagePath = null;
        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('blogs', 'public');
        }
        DB::table('posts')->insert([
            'title' => $validated['title'],
            'slug' => $slug,
            'content' => $validated['content'],
            'image_path' => $imagePath,
            'is_published' => $validated['is_published'] ?? false,
            'published_at' => $validated['is_published'] ? now() : null,
            'author_id' => auth()->id(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->route('blog.index')->with('success', 'Blog post created successfully.');
    }

    public function edit($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        if (!$post) {
            return redirect()->route('blog.index')->with('error', 'Blog post not found.');
        }
        return view('blog.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'is_published' => 'sometimes|boolean',
        ]);
        $slug = \Str::slug($validated['title']);
        $imagePath = null;
        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('blogs', 'public');
        }
        $updateData = [
            'title' => $validated['title'],
            'slug' => $slug,
            'content' => $validated['content'],
            'is_published' => $validated['is_published'] ?? false,
            'published_at' => $validated['is_published'] ? now() : null,
            'updated_at' => now(),
        ];
        if ($imagePath) {
            $updateData['image_path'] = $imagePath;
        }
        DB::table('posts')->where('id', $id)->update($updateData);
        return redirect()->route('blog.index')->with('success', 'Blog post updated successfully.');
    }

    public function destroy($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return response()->json(['success' => true, 'message' => 'Blog post deleted successfully.']);
    }
}
