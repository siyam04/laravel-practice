<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class WritePostController extends Controller
{
    public function writePost()
    {
//        echo 'Write Anything...';

        return view('post.write_post');
    }

    public function addCategory()
    {
        return view('post.add_category');
    }

    // POST Request
    public function storeCategory(Request $request)
    {
        $data = array();
        // name=DB field | category_name=Form name | $request=variable (editable)
        $data['name'] = $request->category_name;
        $data['slug'] = $request->slug;
        $category = DB::table('categories')->insert($data);

//        if ($category)
//        {
//            return redirect()->route('store.category');
//        }
//        else
//        {
//            echo 'Failed';
//        }
//
        return response()->json($data);

//        if ($category)
//        {
//            echo 'Created';
//            return Redirect()->back();
//        }
//        else
//        {
//            echo 'Failed';
//            return Redirect()->back();
//        }
//
//        return response()->json($data);
//        echo '<pre>';
//        print_r($data);
    }
}
