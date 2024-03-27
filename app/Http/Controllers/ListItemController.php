<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use Illuminate\Http\Request;

class ListItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //    // $posts = ListItem::all();
    //     $listItems = ListItem::paginate(15); 

    //     return view('articles.index', compact('listItems'));

    // }

    public function index()
    {

        return view('listItems.index',[
            'listItems' => ListItem::paginate()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('listItems.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ListItem::create($request->all());
        return redirect()->route('listItems.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('listItems.edit', compact('listItem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $listItems->update($request->all());
        return redirect()->route('listItems.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $listItems->delete();
        return redirect()->route('listItems.index');
    }
}
