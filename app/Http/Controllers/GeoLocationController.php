<?php

namespace App\Http\Controllers;

use App\Models\GeoLocation;
use Illuminate\Http\Request;

class GeoLocationController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function search(Request $request)
    {
        $locations = GeoLocation::where([
            ['geo_code', $request->geo_code],
            ['city_name', 'LIKE', '%'.$request->city_name.'%'],
        ])->select('city_name', 'zip_code', 'geo_lat', 'geo_lon', 'geo_code', 'id')->paginate($request->pagination);

        return $locations;
    }
}
