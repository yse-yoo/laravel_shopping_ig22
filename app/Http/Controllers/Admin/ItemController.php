<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return view('admin.item.index');
    }

    public function create()
    {
        return view('admin.item.create');
    }

    public function add(Request $request)
    {
        return redirect()->route('admin.item.index');
    }

}
