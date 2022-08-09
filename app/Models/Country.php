<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
      //La tabla a conectar a este modelo
      protected $table="countries";
      //La clave primaria de esa tabla 
      protected $primaryKey="country_id";
      //Omitir los campo  de auditoria
      public $timestamps =false;


      //relacion M:M entre paises e idiomas
      public function idiomas(){
      //belongsToMany : parametros
      //1. modelo a rlacionar
      //2. la tabla pivote o de rompimiento
      //3. FK modelo actual en el pivote 
      //4. FK del modelo a relacionar en el pivote 
      return $this->belongsToMany(Idioma::Class,
                                  'country_languages',
                                  'country_id',
                                  'language_id'
                                )->withPivot('official');
      
}


}


