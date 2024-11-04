<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Alumnos extends Model
{
    use HasFactory;
    /*
    protected function gènero(): Attribute
    {
        return Attribute::make(
            set: function (string $value) {
                return strtoupper($value); 
            },
            get: function (string $value) {
                return strtoupper($value); 
            }
        );
    }*/
//modificar la primera letra a mayusculas 
    /*protected $fillable = ['nombre'];

    public function getNombreAttribute($value)
    {
        return ucfirst($value); 
    }*/
    
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime', //se establece que devolverá DATETIME
            'is_active' => 'boolean' //se establece que devolverá BOOLEAN
        ];
    }
}

