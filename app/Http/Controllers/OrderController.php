<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $order = new Order();
        $order->fill($data);
        $order->city()->associate(City::find($data['city']));
        $order->service()->associate(Service::find($data['service']));
        $order->save();

        flash(__('content.service.flash.order'))->success()->important();

        return redirect()->route('welcome.show');
    }
}
