<?php

namespace App\Http\Controllers\ElementAppartement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\storeReservationRequest;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $reservation = Reservation::with('user')->get();
        return view('reservation' , ['reservations'=>$reservation] 
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeReservationRequest $request , $id)
    {
        //
        $user_id = Auth()->user()->id;
        $appartement_id = $id;

        Reservation::create([
            'appartement_id'=>$appartement_id,
            'user_id'=>$user_id,
            'date_debut'=>$request->start_date,
            'date_fin'=>$request->end_date,
        ]);

        return redirect()->route('reservation.index');


        

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
