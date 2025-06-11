<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\PhotoVideo;
use App\Models\Room;
use Illuminate\Http\Request;

class productspage extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Room::all();


        return view('site.products.index', [
            'products' => $products,
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

     public function productdetail($slug)
    {

        $products = Room::with(['price', 'faqs', 'hour.reservations'])
            ->withoutTrashed()
            ->where('slug', $slug)
            ->where('place_id', 1) // Filtering for place_id = 1
            ->orderBy('order')
            ->firstOrFail([
                'id', 'slug', 'place_id', 'title', 'description', 'poster', 'banner', 'text_picture',
                'level', 'duration', 'person', 'seo_title', 'seo_description', 'seo_keywords'
            ]);
            $photovideo = PhotoVideo::where('room_id', $products->id)->get();

        return view('site.products.details', [
            'id' => $products->id,
            'products' => $products,
            'photos' => $photovideo
        ]);
    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
