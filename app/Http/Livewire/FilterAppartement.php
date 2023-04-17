<?php

namespace App\Http\Livewire;

use App\Models\Appartement;
use App\Models\Characteristic;
use App\Models\Citie;
use Livewire\Component;

class FilterAppartement extends Component
{

    public $person_nombre;
    public $city;
    public $chambre_nombre;


    //   public function updateNombrePersonne($value)
    // {
    //     $this->filter = $value;
    // } 
    public function render()
    {
        $allcities = Citie::all();
        $allcharacteristic = Characteristic::get();
        $allapartemnt = Appartement::with('images')->with('characteristics')->with('city')->when($this->person_nombre)->where('person_nombre',$this->person_nombre)
        ->when($this->city)->where('city_id',$this->city)->when($this->chambre_nombre)->where('no_chambre',$this->chambre_nombre)->get();
        // if($this->filter){ 
        // dd($this->filter);}
        // return $allapartemnt;
        // return $allcities;
        // return $allapartemnt;
        // return $allapartemnt;
        // return $allapartemnt;

        return view('livewire.filter-appartement', [
            // 'persons' => $NombrePerson,
            // 'characteristics' => $allcharacteristic,
            'cities'=>$allcities,
            'appartements'=>$allapartemnt,
        ]);


    }
}
