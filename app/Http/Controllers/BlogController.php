<?php

namespace App\Http\Controllers;

use App\Helpers\FormatNumber;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function show(string $slug)
    {
        try {
            $blog = BlogPost::where('slug', $slug)->firstOrFail();

            $formattedViews = FormatNumber::formatNumber($blog->views);

            $viewed = Session::get('viewed_post', []);
            if (!in_array($blog->id, $viewed)) {
                $blog->increment('view_count');
                Session::push('viewed_post', $blog->id);
            }

            $page_title = $blog->title;


            // $relatedBlogs = Blog::where('category_id', $blog->category->id)
            //     ->where('id', '!=', $blog->id)
            //     ->orderBy('created_at', 'desc')
            //     ->take(6)
            //     ->get();


            // $relatedBlogs->transform(function ($blog) {
            //     $blog->formattedViews = Helper::formatNumber($blog->views);
            //     return $blog;
            // });


            // Retrieve the blog before the current one
            // $previousBlog = Blog::where('category_id', $blog->category->id)
            //     ->where('created_at', '<', $blog->created_at)
            //     ->orderBy('created_at', 'desc')
            //     ->first();

            // Retrieve the blog after the current one
            // $nextBlog = Blog::where('category_id', $blog->category->id)
            //     ->where('created_at', '>', $blog->created_at)
            //     ->orderBy('created_at', 'asc')
            //     ->first();



            return view('pages.blog.read', compact('blog'));
        } catch (\Exception $e) {
            $errorMessage = "An error occurred while fetching the blog post.";

            return view('error', compact('errorMessage'));
        }
    }
}
