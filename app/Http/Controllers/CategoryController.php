<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{public function index()
    {
        //
        return Category::all();
    }

    public function store(Request $request)
    {
        //
        $validator = \Validator::make( $request->all(),[
                "title"=>"required|string|max:255",

            ]);

            if(!$validator->fails()){
                $cat = new Category();
                $cat->title = $request->title;
                $cat->save();
                return $cat;
            }
    }


    public function show($id)

    {
        //
        return Category::find($id);
    }



    public function update(Request $request, $id)
    {
        //
        $validator = \Validator::make( $request->all(),[
            "title"=>"required|string|max:255",

        ]);

        if(!$validator->fails()){
            $cat = Category::find($id);
            $cat->title = $request->title;
            $cat->update();
            return $cat;
        }

    }


    public function destroy($id)
    {
        //
        return Category::destroy($id);
    }
}
