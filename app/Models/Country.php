<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
      //La tabla a conectar a este modelo
      protected $table="countries";
      //La clave primaria de esa tabla 
      protected $primaryKey="countryexit_id";
      //Omitir los campo  de auditoria
      public $timestamps =false;

        use HasFactory;
}
