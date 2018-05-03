<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use App\Category;

class CategoryController extends Controller
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
    	$category_posts = Post::where('category_id', $id)->get();
    	$categories = Category::all();
        $popular_posts = Post::orderBy('views', 'desc')->take(4)->get();
        $interest_posts = Post::orderBy('views', 'asc')->take(4)->get();

    	$data = array(
    		'category_posts' => $category_posts,
    		'categories' => $categories,
            'popular_posts' => $popular_posts,
            'interest_posts' => $interest_posts
    	);
        if(count($category_posts) > 1){
    		return view('vendor.category.guest', $data);
    	}else{
    		return view('errors.404', $data);
    	}
    }

    public function show()
    {
        $categories = Category::all();

        $data = array(
            'categories' => $categories
        );
        return view('vendor.category.admin', $data);
    }

    public function editTemp($id)
    {
        $category = Category::find($id);

        $data = array(
            'category' => $category
        );

        if ($category) {
            return view('layouts.admin.edit.category', $data);
        }else{
            return view('errors.404');
        }
    }

    public function edit(Request $request)
    {
        $data = $request->all();

        if($request->ajax()){

            $id = intval($data['id']);

            if (Category::where('id', '=', $id)->update(['name' => $data['name']])) {
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

            if ($cat = Category::find($id)) {
                $cat->delete();
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
        return view('layouts.admin.create.category');
    }

    public function create(Request $request)
    {
        $data = $request->all();

        if($request->ajax()){

            $new_cat = Category::create(['name' => $data['name']]);

            if ($new_cat->save()) {
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
