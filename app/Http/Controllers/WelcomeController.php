<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Service;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $cities = City::all();
        $services = Service::all();

        return view('web.content.welcome', ['services' => $services, 'cities' => $cities]);
    }
}
