<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::get();
        $data = ['items' => $items];
        return view('admin.item.index', $data);
    }

    public function create()
    {
        return view('admin.item.create');
    }

    public function add(Request $request)
    {
        $posts = $request->all();
        Item::create($posts);
        return redirect()->route('admin.item.index');
    }

    public function edit(Request $request, $id)
    {
        $item = Item::find($id);
        $data = ['item' => $item];
        return view('admin.item.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $posts = $request->all();
        Item::find($id)->update($posts);
        return redirect()->route('admin.item.index');
    }

    public function delete(Request $request, $id)
    {
        return redirect()->route('admin.item.index');
    }
}
