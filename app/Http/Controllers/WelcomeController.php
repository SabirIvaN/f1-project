<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Service;

class WelcomeController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $cities = City::all();
        $services = Service::all();

        return view('web.content.welcome', [
            'services' => $services,
            'cities' => $cities,
        ]);
    }
}
