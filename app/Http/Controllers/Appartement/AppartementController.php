<?php

namespace App\Http\Controllers\Appartement;

use App\Models\Appartement;
use App\Models\Image;
use App\Models\Localisation;
use App\Models\Person;
use App\Models\Characteristic;
use App\Models\Citie;
use Illuminate\Support\Str;
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
        $allcities = Citie::all();
        $allcharacteristic = Characteristic::get();
        $NombrePerson = Person::get();
        $allapartemnt = Appartement::with('images')->with('characteristics')->with('localisation.city')->get();
        // return $allcities;
        // return $allapartemnt;
        // return $allapartemnt;
        return view('mydashboard', [
            'persons' => $NombrePerson,
            'characteristics' => $allcharacteristic,
            'cities'=>$allcities,
            'appartements'=>$allapartemnt,
        ]);
        
        // return $allapartemnt;
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
        // return "ok";
            $userId = Auth()->user()->id;
            $status = Appartement::Disponible;
        
            $newAppartement = Appartement::create([
                'user_id' => $userId,
                'personne_id' => $request->nombrePersonne,
                'description' => $request->description,
                'space' => $request->espaces,
                'no_chambre' => $request->nombreChambre,
                'prix' => $request->prix,
                'date' => $request->date,
                'status' => $status, 
            ]);
            $id = $newAppartement->id;
            $images = [];
        
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $filename =  Str::uuid()->toString(). '.' . $image->getClientOriginalExtension();
                    $image->storeAs('image', $filename, 'public');
                    Image::insert([
                        'appartement_id' => $id,
                        'image' => $filename,
                    ]);
                }
            }
            
        
            // $id = $newAppartement->id;
        
            // foreach ($images as $image) { 
            //     Image::insert([
            //         'appartement_id' => $id,
            //         'image' => $image,
            //     ]);
            // }
     
       
        Localisation::create([
            'appartement_id'=>$id,
            'localisation'=>$request->localisation,
            'city_id'=>$request->city,
        ]);



      $characteristiques = $request->input('caracteristique'); 
      $newAppartement->characteristics()->attach($characteristiques);

    // return $this->index();
    return redirect()->route('dashboard');
    
        }


        
    

        
       
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function show()
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
