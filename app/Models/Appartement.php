<?php

namespace App\Models;
use App\Enums\AppartementStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
  

  public const Disponible = 'Disponible';
  public const Loue = 'Loué';


    use HasFactory;
    
    protected $fillable =[
      'id',
      'user_id',
      'personne_id',
      'name',
      'description',
      'space',
      'caracteristique_id',
      'no_chambre',
      'prix',
      'date',
      'status',
    ];

   
    // protected $casts = [
    //   'status' => AppartementStatus::class
    //   ];
    

    public function characteristics(){
      return $this->belongsToMany(Characteristic::class,'appartement_characteristics');
    }
    public function images(){
      return $this->hasMany(Image::class);
    }
    public function localisation(){
      return $this->hasOne(Localisation::class);
    }

    public function person(){
      return $this->belongsTo(Person::class);
    }

    public function reservations(){
           return $this->hasMany(Reservation::class);
    }
}
