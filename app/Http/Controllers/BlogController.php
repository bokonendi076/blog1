<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function listBlogs()
    {
        $blogs = Blog::all();

        return view('blog.list', [
            'blogs' => $blogs,
        ]);
    }

    public function createBlog()
    {
        return view('blog.create');
    }

    public function processCreateBlog(Request $request)
    {
        $newBlog = new Blog;
        $newBlog->title = $request->input('blog_title');
        $newBlog->content = $request->input('blog_content');
        $newBlog->created_by = Auth::id();
        $newBlog->save();

        return redirect()->route('listBlogs');
    }

    public function editBlog($id)
    {
        $blog = Blog::find($id);

        return view('blog.edit',[
            'blog' => $blog,
        ]);        
    }

    public function processEditBlog(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $blog->title = $request->input('blog_title');
        $blog->content = $request->input('blog_content');
        $blog->save();

        return redirect()->route('listBlogs');
    }

    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('listBlogs');
    }

    public function viewBlog($id)
    {
        $blog = Blog::findOrFail($id);

        return view('blog.view',[
            'blog' => $blog,
        ]);
    }

}
