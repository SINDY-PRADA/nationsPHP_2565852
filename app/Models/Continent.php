<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //La tabla a conectar a este modelo
    protected $table="continents";
    //La clave primaria de esa tabla 
    protected $primaryKey="continent_id";
    //Omitir los campo  de auditoria
    public $timestamps =false;
    
    use HasFactory;

    //relacion entre continente entre region 
    public function regiones(){
        //hasMany parametros:
        //1.El modelo
        //2. La clave FK actual en 
        //el modelo a relacionar
        return $this->hasMany(Region::class ,
                                'continent_id');
    }

    //relacion entre continente y sus paises:
    //Abuelo:: Continent
    //Papa:Region
    //Nieto: Coutry
    public function paises(){
        //hasManyThrough  Parametros
        //1 Modelo Nieto
        //2 Modelo Papa 
        //3 FK del abuelo en el papa
        //4. FK del papa en el nieto
        return $this->hasManyThrough(Country::Class,
                                    Region::class,
                                    'continent_id',
                                    'region_id');

        }
}
