<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Kirim;
use DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = DB::table('orders')
        ->join('users', 'users.id', '=', 'orders.idCostmer')
        ->join('kirims', 'kirims.idKirim', '=', 'orders.idKirim')
        ->select('orders.*','users.*','kirims.*')
        ->get();
        $costumer = User::all();
        $kirim = Kirim::all();
        return view('order.index',compact('order','costumer','kirim'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $order = DB::table('orders')
        ->join('users', 'users.id', '=', 'orders.idCostmer')
        ->join('kirims', 'kirims.idKirim', '=', 'orders.idKirim')
        ->select('orders.*','users.*','kirims.*')
        ->get();
        $costumer = User::all();
        $kirim = Kirim::all();
        return view('order.add',compact('order','costumer','kirim'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Order::create([
            'orderDate' => $request->orderDate,
            'idCostmer' => $request->idCostumer,
            'idKirim' => $request->idKirim,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
