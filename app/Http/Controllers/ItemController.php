<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$items = Item::all();
        $items = Item::latest()->paginate(5);
        $index = (request()->input('page', 1) - 1) * 5;

        return view('items.index', compact('items'))->with('i', $index);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate
        ([
            'item_id'=>'required',
            'item_name'=>'required',
            'item_price'=>'required'
        ]);

        $item = new Item
        ([
            'item_id' => $request->get('item_id'),
            'item_name' => $request->get('item_name'),
            'item_price' => $request->get('item_price'),
        ]);

        $item->save();

        return redirect('/items')->with('success', 'Item saved!');
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
        $item = Item::find($id);
        return view('items.edit', compact('item'));
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
        $request->validate
        ([
            'item_id'=>'required',
            'item_name'=>'required',
            'item_price'=>'required'
        ]);

        $item = Item::find($id);
        $item->item_id =  $request->get('item_id');
        $item->item_name = $request->get('item_name');
        $item->item_price = $request->get('item_price');

        $item->save();

        return redirect('/items')->with('success', 'Item updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();

        return redirect('/items')->with('success', 'Item deleted!');
    }
}
