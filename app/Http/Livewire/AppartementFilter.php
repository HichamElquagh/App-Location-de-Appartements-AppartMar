<?php

namespace App\Http\Livewire;

use App\Models\Appartement;
use App\Models\Citie;
use Livewire\Component;

class AppartementFilter extends Component
{

    public $filter;

    public function filterBySelectedValue($value)
  {
    $this->filter = $value; 
    // use $this->selectedValue in your filter logic
  }
  

    public function render()
    {     
        // if($this->filter)
        // return $this->filter;
        $allcities = Citie::all();
        $allapartemnt = Appartement::with('images')->with('characteristics')->with('localisation.city')->get();
        
        if ($this->filter) {
            $allapartemnt->where('person_nombre','=',$this->filter);
          }

        return view('livewire.appartement-filter', [

            'appartements'=>$allapartemnt,
            'cities'=>$allcities,
            
        ]);

    }
    
}



