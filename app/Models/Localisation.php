<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localisation extends Model
{
    use HasFactory;

    protected $fillable =[
    'appartement_id',
    'localisation',
    'city_id',
    ]; 
}
