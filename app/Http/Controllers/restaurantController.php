<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class restaurantController extends Controller
{

    public function allRestaurant()
    {

        $restaurants = DB::table('restaurants')->get();
        return view ('welcome')->with('restaurants',$restaurants);
    }

    public function newRestaurant()
        {
            return view('newRestaurant');
        }

        public function restaurantAdded(Request $request)
        {
            $data = array();
            $data['Name']=$request->Name;
            $data['Stadt']=$request->Stadt;
            $data['Beschreibung']=$request->Beschreibung;
            $insert = DB::table('restaurants')->insert($data);
            return Redirect()->route('restaurants');
        }
}
