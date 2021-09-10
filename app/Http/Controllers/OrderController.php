<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $cities = City::all();
        $service = Service::find($id);

        return view('web.content.order.create', ['cities' => $cities, 'service' => $service]);
    }

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
        $order->city()->associate(City::find($data['city_id']));
        $order->service()->associate(Service::find($data['service_id']));
        $order->save();

        flash(__('views.web.content.service.flash.order'))->success()->important();

        return redirect()->route('welcome.show');
    }
}
