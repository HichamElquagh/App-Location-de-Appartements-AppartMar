<?php

namespace App\Http\Controllers\Appartement;

use App\Models\Appartement;
use App\Models\Image;
use App\Models\Localisation;
use App\Http\Requests\StoreAppartementRequest;
use App\Http\Requests\UpdateAppartementRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Enums\AppartementStatus;

class AppartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreAppartementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppartementRequest $request)
    {
        //
        return $request;
            $userId= Auth()->user()->id;

        $status = Appartement::Disponible;

        
        foreach($request->images as $image)
        {
            $filename  = time() . '.' .  $image->getClientOriginalExtension();
            $image->storeAs('public/images',$filename);
        
            $images[] = $filename;
        }        
        Appartement::create([
            'user_id'=>$userId,
            'localisation_id'=>$request->localisation,
            'personne_id'=>$request->nombrePersonne,
            'description'=>$request->description,
            'space'=>$request->espaces,
            'no_chambre'=>$request->nombrePersonne,
            'prix'=>$request->prix,
            'date'=>$request->date,
            'status'=>$status, 
        ]);

        Image::create([
            'appartement_id'=>$request->id,
            'image'=>$images,
        ]);
        

        Localisation::create([
            'localisation'=>$request->localisation,
            'city_id'=>$request->city,
        ]);

        }
    

        
       
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function show(Appartement $appartement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function edit(Appartement $appartement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAppartementRequest  $request
     * @param  \App\Models\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppartementRequest $request, Appartement $appartement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appartement $appartement)
    {
        //
    }
}
