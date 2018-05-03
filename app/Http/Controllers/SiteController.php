<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

use App\Post;

class SiteController extends Controller
{
    public function index()
    {

    	$categories = Category::all();
    	$latest_posts = Post::orderBy('created_at', 'desc')->take(3)->get();
    	$categories_posts = array();
        $popular_posts = Post::orderBy('views', 'desc')->take(4)->get();
        $interest_posts = Post::orderBy('views', 'asc')->take(4)->get();
    	$i = 0;
    	
    	foreach ($categories as $category) {
    		$categories_posts[$i]['cat_name'] = $category->name;
    		$categories_posts[$i]['cat_posts'] = Post::where('category_id', $category->id)->take(3)->get();
    		$i++;
    		if ($i === 4) break;
    	}
    	
    	$data = array(
    		'categories_posts' => $categories_posts,
    		'categories' => $categories,
    		'latest_posts' => $latest_posts,
            'popular_posts' => $popular_posts,
            'interest_posts' => $interest_posts
    	);

    	return view('vendor.home.guest', $data);
    }
    public function search()
    {
        $search_text = strip_tags($_GET['s']);

        $categories = Category::all();
        $popular_posts = Post::orderBy('views', 'desc')->take(4)->get();
        $interest_posts = Post::orderBy('views', 'asc')->take(4)->get();

        $search_results = Post::where('title', 'like', '%'.$search_text.'%')->orWhere('content', 'like', '%'.$search_text.'%')->get();

        $data = array(
            'categories' => $categories,
            'popular_posts' => $popular_posts,
            'interest_posts' => $interest_posts,
            'search_results' => $search_results
        );
        
        return view('vendor.search', $data);

    }
}
