<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSimpsonsQuotesRequest;
use App\Http\Requests\UpdateSimpsonsQuotesRequest;
use App\Http\Resources\SimpsonsQuoteResource;
use App\Models\SimpsonsQuote;

class SimpsonsQuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        SimpsonsQuote::factory()->create();
        $latest = SimpsonsQuote::latest()->take(5)->pluck('id');
        SimpsonsQuote::whereNotIn('id',$latest)->delete();

        $collection = SimpsonsQuote::latest()->take(5)->get();
        return SimpsonsQuoteResource::collection($collection);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSimpsonsQuotesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SimpsonsQuote $simpsonsQuotes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SimpsonsQuote $simpsonsQuotes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSimpsonsQuotesRequest $request, SimpsonsQuote $simpsonsQuotes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SimpsonsQuote $simpsonsQuotes)
    {
        //
    }
}
