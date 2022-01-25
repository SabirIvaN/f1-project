<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Order;
use App\Models\Service;
use App\Models\User;
use App\Notifications\Client\OrderNotification as ClientNotification;
use App\Notifications\Dashboard\OrderNotification as DashboardNotification;
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

        Notification::route('mail', $order->email)->notify(new ClientNotification($order));
        Notification::send(User::all(), new DashboardNotification($order));

        flash(__('app.http.controllers.order_controller.store.flash'))
            ->success()
            ->important();

        return redirect()->route('welcome.show');
    }
}
