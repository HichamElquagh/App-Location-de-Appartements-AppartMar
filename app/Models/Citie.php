<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citie extends Model
{
    use HasFactory;
    protected $table = 'cities';

    protected $fillable=[
        'id',
        'city',
    ];

    public function localisation(){
        return $this->hasOne(Characteristic::class);
    }

    

}
