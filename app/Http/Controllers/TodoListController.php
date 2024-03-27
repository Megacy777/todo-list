<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listItem;

class TodoListController extends Controller
{
    public function saveItem(){
        return view ('welcome');
    }



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

}
