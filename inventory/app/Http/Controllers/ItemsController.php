<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = \App\Models\Items::all()->sortBy('item');
        return view('item.index')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|max:50|unique:items,title',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'sku' => 'required|max:50|unique:items,sku',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ];
        $valid = $this->validate($request, $rules);
        $item = new \App\Models\Items;

        $item->category = $request->item;
        $item->save();

        return redirect()->route('item.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|max:50|unique:items,title',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'sku' => 'required|max:50|unique:items,sku',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'.$id
        ];
        $valid = $this->validate($request, $rules);
        $item = \App\Models\Items::find($id);
        $item->category_id = $request->category_id;
        $item->title = $request->title;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->sku = $request->sku;
        $item->image = $request->image;
        $item->save();
        return redirect()->route('item.index');


    }

    public function destroy($id)
    {
        //
        $item = \App\Models\Items::find($id);
        $item->delete();
    }
}
