<?php

namespace App\Http\Controllers;

use App\Models\FromAirport;
use App\Models\ToAirport;
use Illuminate\Http\Request;

class DropdownController extends Controller
{
    

    public function fetchToAirport(Request $request)
    {
        $data['toAirports'] = ToAirport::where("from_airport_id",$request->country_id)->get(["city_name", "id","airport_name","iata_code"]);
        return response()->json($data);
    }

   
}
