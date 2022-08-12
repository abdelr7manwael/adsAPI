<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
class FilterController extends Controller
{
    //
    public function filter_tag($id){


        return Tag::find($id)->ads;
    }

    public function filter_category($id){
        return Category::find($id)->ads;
    }

    public function user_ads($id){
        return User::find($id)->ads;
    }
}
