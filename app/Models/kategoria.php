<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoria extends Model
{
    /** @use HasFactory<\Database\Factories\KategoriaFactory> */
    use HasFactory;

    protected $table='kategorias';

    public function teszt(){
        return $this->hasMany(Teszt::class,'kategoriaId');
    }
}
