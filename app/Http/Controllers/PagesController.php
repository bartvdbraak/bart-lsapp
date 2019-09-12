<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PagesController extends Controller
{
    public function index() {
        // Latest two posts displayed on homepage
        $posts = Post::orderBy('created_at','desc')->take(2)->get();
        return view('pages.index')->with('posts', $posts);
    }
    public function about() {
        return view('pages.about');
    }
    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
