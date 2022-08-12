<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ad::all();
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)

    {
        //
        return Ad::find($id);
     }

    public function update(Request $request, Ad $ad)
    {
        //
    }

    public function destroy(Ad $ad)
    {
        //
    }
}
