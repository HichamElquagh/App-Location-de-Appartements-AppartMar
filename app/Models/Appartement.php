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
      'localisation_id',
      'personnes_id',
      'image_id',
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
    
}
