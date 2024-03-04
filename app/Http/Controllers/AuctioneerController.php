<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auctioneer;

class AuctioneerController extends Controller
{
    public function index()
    {
        $auctioneers = Auctioneer::all();
        return view('auctioneers.index', compact('auctioneers'));
    }

    public function create()
    {
        return view('auctioneers.create');
    }

    public function store(Request $request)
    {
        Auctioneer::create($request->all());
        return redirect()->route('auctioneers.index');
    }

    public function edit(Auctioneer $auctioneer)
    {
        return view('auctioneers.edit', compact('auctioneer'));
    }

    public function update(Request $request, Auctioneer $auctioneer)
    {
        $auctioneer->update($request->all());
        return redirect()->route('auctioneers.index');
    }

    public function destroy(Auctioneer $auctioneer)
    {
        $auctioneer->delete();
        return redirect()->route('auctioneers.index');
    }
}
