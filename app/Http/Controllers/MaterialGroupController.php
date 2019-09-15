<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialGroupController extends Controller
{
    public function index(Request $request)
    {
        return view('material.index');
    }

    public function new(Request $request)
    {
        return view('material.new');
    }

    public function edit(Request $request, $material_id = 0)
    {
        return view('material.edit');
    }
}
