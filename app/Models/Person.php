<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'person'
    ];

    public function appartement(){
        return $this->hasOne(Appartement::class);

    }
}
