<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
     //La tabla a conectar a este modelo
     protected $table="regions";
     //La clave primaria de esa tabla 
     protected $primaryKey="region_id";
     //Omitir los campo  de auditoria
     public $timestamps =false;
    use HasFactory;

    //relacioon entre regiones y continentes 
    public function continente(){
        //belongsTo: Parametros 
        //2.modelo a relacionar
        // en el modleo actual
        return $this->belongsTo( Continent::Class,
                                'continent_id');
    }
    //relacion entre region 1 -M paaises
    public function paises(){
        return $this->hasMany(Country::class,
                                'region_id');
    }

}