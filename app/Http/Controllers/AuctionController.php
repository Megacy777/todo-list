<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index()
    {
        // $auctions = Auction::all();
        $auctions = Auction::paginate(15);

        // dd($auctions->toArray());

        // Get all active auctions
        $activeAuctions = Auction::active()->get();

        // Get all expired auctions
        $expiredAuctions = Auction::expired()->get();

        // Get all upcoming auctions
        $upcomingAuctions = Auction::upcoming()->get();

        return view('auctions.index', compact('auctions', 'activeAuctions', 'expiredAuctions', 'upcomingAuctions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auctions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Auction::create($request->all());

        return redirect()->route('auctions.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->authorizeForUser('view', $id);
        return redirect()->route('auctions.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auction $auction)
    {
        return view('auctions.edit', compact('auction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auction $auction)
    {
        $auction->update($request->all());
        return redirect()->route('auctions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auction $auction)
    {
        $auction->delete();
        return redirect()->route('auctions.index');
    }
}
