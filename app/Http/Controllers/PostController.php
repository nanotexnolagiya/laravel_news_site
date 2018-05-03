<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use App\Category;

class PostController extends Controller
{
    private $error = array(
            'result' => 'false',
            'text' => 'Error'
        );

    private $success = array(
            'result' => 'true',
            'text' => 'Success'
        );

    public function index($id)
    {
    	$post = Post::find($id);

    	$categories = Category::all();
        $popular_posts = Post::orderBy('views', 'desc')->take(4)->get();
        $interest_posts = Post::orderBy('views', 'asc')->take(4)->get();

    	$data = array(
    		'categories' => $categories,
    		'post' => $post,
            'popular_posts' => $popular_posts,
            'interest_posts' => $interest_posts
    	);

    	if($post){
    		return view('vendor.post.guest', $data);
    	}else{
    		return view('errors.404', $data);
    	}
    }

    public function show()
    {
        $posts = Post::all();
        $categories = Category::all();

        $data = array(
            'posts' => $posts,
            'categories' => $categories
        );
        return view('vendor.post.admin', $data);
    }

    public function editTemp($id)
    {
        $post = Post::find($id);
        $categories = Category::all();

        $data = array(
            'post' => $post,
            'categories' => $categories
        );

        if ($post) {
            return view('layouts.admin.edit.post', $data);
        }else{
            return view('errors.404');
        }
    }

    public function edit(Request $request)
    {

        $data = $request->all();
        
        if($request->ajax()){

            $id = intval($data['id']);

            if (Post::where('id', '=', $id)->update([
                'title' => strip_tags($data['title']),
                'content' => $data['content'],
                'image' => 'images/'.$data['image'],
                'category_id' => $data['category']
            ])) {
                $response = $this->success;
            }else{
                $response = $this->error;
            }

            return response()->json(json_encode($response));
        }else{
            return false;
        }
    }

    public function delete(Request $request)
    {
        $data = $request->all();
        
        if($request->ajax()){

            $id = intval($data['id']);

            if ($post = Post::find($id)) {
                $post->delete();
                $response = $this->success;
            }else{
                $response = $this->error;
            }

            return response()->json(json_encode($response));
        }else{
            return false;
        }
    }

    public function createTemp()
    {
        $categories = Category::all();

        $data = array(
            'categories' => $categories
        );
        return view('layouts.admin.create.post', $data);
    }

    public function create(Request $request)
    {
        $data = $request->all();

        if($request->ajax()){

            $new_post = Post::create([
                'title' => strip_tags($data['title']),
                'content' => $data['content'],
                'image' => 'images/'.$data['image'],
                'category_id' => $data['category']
            ]);

            if ($new_post->save()) {
                $response = $this->success;
            }else{
                $response = $this->error;
            }

            return response()->json(json_encode($response));
        }else{
            return false;
        }
    }
}
