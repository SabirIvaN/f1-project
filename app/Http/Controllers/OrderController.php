<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Order;
use App\Models\Service;
use App\Notifications\OrderNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class OrderController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $cities = City::all();
        $service = Service::find($id);

        return view('web.content.order.create', [
            'cities'  => $cities,
            'service' => $service,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $order = new Order();

        $order->fill($data);
        $order->save();
        $order
            ->cities()
            ->attach(City::find($data['city_id']));
        $order
            ->services()
            ->attach(Service::find($data['service_id']));

        Notification::route('mail', $order->email)->notify(new OrderNotification($order));

        flash(__('vendor.flash.order'))
            ->success()
            ->important();

        return redirect()->route('welcome.show');
    }
}
