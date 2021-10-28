<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\travel;
class TravelControllerAPI extends Controller{
    public function travelMidterm(){
        $travel = Travel::all();
        return response()->json(['travel',$travel]);
    }
}