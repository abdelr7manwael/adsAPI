<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Ad;
use Illuminate\Http\Request;


class TagController extends Controller
{
    public function index()
    {
        //
        return Tag::all();
    }

    public function store(Request $request)
    {
        //
        $validator = \Validator::make( $request->all(),[
                "title"=>"required|string|max:255",

            ]);

            if(!$validator->fails()){
                $tag = new Tag();
                $tag->title = $request->title;
                $tag->save();
                return $tag;
            }
    }


    public function show($id)

    {
        //
        return Tag::find($id);
    }



    public function update(Request $request, $id)
    {
        //
        $validator = \Validator::make( $request->all(),[
            "title"=>"required|string|max:255",

        ]);

        if(!$validator->fails()){
            $tag = Tag::find($id);
            $tag->title = $request->title;
            $tag->update();
            return $tag;
        }

    }


    public function destroy($id)
    {
        //
        return Tag::destroy($id);
    }


}

