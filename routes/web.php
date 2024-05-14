<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\listing;




Route::get('/', function (){
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => listing::all()
    ]);
});

Route::get('/listings/{id}' ,function ($id){
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});