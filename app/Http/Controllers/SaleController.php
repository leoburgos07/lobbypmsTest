<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Bedroom;
use Illuminate\Http\Request;
use App\Http\Requests\SaleRequest;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Sale::where('users_id', Auth::user()->id)->get();
        return view('bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bedrooms = Bedroom::all();
        return view('bookings.create', compact('bedrooms'));
    }

    public function make(Bedroom $bedroom){

        return view('bookings.make', compact([
            'bedroom'
        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaleRequest $request)
    {
        
        Sale::Create([
            'reservationDate' => $request['reservationDate'],
            'reservationDays' => $request['reservationDays'],
            'payment' => $request['payment'],
            'users_id' => $request['user_id'],
            'bedrooms_id' => $request['bedroom_id']
        ]);

        return redirect('/home');
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
        $booking = Sale::find($id);
        $booking->delete();
        return redirect()->back()->with('status','Reserva cancelada correctamente');
    }
}
