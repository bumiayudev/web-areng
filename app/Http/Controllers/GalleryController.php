<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = DB::table('galleries')
        ->orderBy('created_at', 'desc')
        ->paginate(6);
        $total = DB::table('galleries')->count();
        return view('gallery', [
            'seo' => [
                'title' => 'Galleries - Arang Tempurung Kelapa Premium | Export Quality',
                'description' => 'Galeri resmi produsen arang tempurung kelapa Indonesia kualitas ekspor',
                'keywords' => 'galeri arang kelapa, charcoal gallery, coconut charcoal gallery',
                'image' => asset('images/briket.jpeg')
            ],
            'galleries' => $galleries,
            'total' => $total
        ]);
    }

    public function load_more(Request $request)
    {
        $offset = $request->input('offset', 0);
        $limit = 6;
        $galleries = DB::table('galleries')
            ->orderBy('created_at', 'desc')
            ->offset($offset)
            ->limit($limit)
            ->get();
        $total = DB::table('galleries')->count();
        return view('gallery-card', ['galleries' => $galleries, 'total' => $total]);
    }

    public function data()
    {
        $galleries = DB::table('galleries')->orderBy('created_at', 'desc');
        return DataTables::of($galleries)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
            $btnEdit = '<a href="'.route('gallery.edit', $row->id).'" class="btn btn-sm btn-outline-warning">Edit</a>';
            $btnDelete = '<button class="btn btn-sm btn-outline-danger btn-delete" data-id="'.$row->id.'">Delete</button>';
            return $btnEdit . ' ' . $btnDelete;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function list()
    {
       return view('gallery.index');
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5124', // max 5MB
        ]);
        $imagePath = $request->file('image_path')->store('galleries', 'public');
        DB::table('galleries')->insert([
            'title' => $request->title,
            'image_path' => $imagePath,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->route('gallery.index')->with('success', 'Gallery item created successfully.');
    }

    public function edit($id)
    {
        $gallery = DB::table('galleries')->where('id', $id)->first();
        return view('gallery.edit', ['gallery' => $gallery]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image_path' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:5124', // max 5MB
        ]);
        $data = [
            'title' => $request->title,
            'updated_at' => now(),
        ];
        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('galleries', 'public');
            $data['image_path'] = $imagePath;
        }
        DB::table('galleries')->where('id', $id)->update($data);
        return redirect()->route('gallery.index')->with('success', 'Gallery item updated successfully.');
    }

    public function destroy($id)
    {
        DB::table('galleries')->where('id', $id)->delete();
        return redirect()->route('gallery.index')->with('success', 'Gallery item deleted successfully.');
    }
}
