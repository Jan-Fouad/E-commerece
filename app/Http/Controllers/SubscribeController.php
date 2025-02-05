<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use App\Http\Requests\StoreSubscribeRequest;
use App\Http\Requests\UpdateSubscribeRequest;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribe=Subscribe::all();
        // return view('admin.subscribers.index');

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
    public function store(StoreSubscribeRequest $request)
    {
        $data =$request->validated();
        Subscribe::create($data);
        return view('front.products')->with('success_sub','subscribed successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscribe $subscribe)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscribe $subscribe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubscribeRequest $request, Subscribe $subscribe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscribe $subscribe)
    {
        //
    }
}
