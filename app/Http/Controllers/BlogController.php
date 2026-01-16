<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog', [
            'seo' => [
                'title' => 'Blog - Arang Tempurung Kelapa Premium | Export Quality',
                'description' => 'Blog resmi produsen arang tempurung kelapa Indonesia kualitas ekspor',
                'keywords' => 'blog arang kelapa, charcoal blog, coconut charcoal blog',
                'image' => asset('images/briket.jpeg')
            ]
        ]);
    }

    public function detail($slug)
    {
        // Logic to fetch blog post by slug can be added here
        return view('blog-detail', [
            'seo' => [
                'title' => 'Blog Post Title - Arang Tempurung Kelapa Premium | Export Quality',
                'description' => 'Detailed blog post about arang tempurung kelapa Indonesia kualitas ekspor',
                'keywords' => 'blog post arang kelapa, charcoal blog post, coconut charcoal blog post',
                'image' => asset('images/briket.jpeg')
            ]
            ]);
    }
}
