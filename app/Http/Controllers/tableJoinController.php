<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tableJoinController extends Controller
{
    function index()
    {
        $data = DB::table('Ratings')

            ->join('Restaurants', 'Ratings.Restaurant_id', '=', 'Restaurant.id')
            ->get();
        return view('welcome', compact('data'));
    }
}
