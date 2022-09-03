<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	protected $guarded = ['id'];     

    public function descrip_modelo()
    {    

    	$descripcion = $this->titulo_del_producto.' ('.$this->varietal->varietal.')';

        return $descripcion;
    }

    public function varietal()
    {
        return $this->belongsTo('App\Varietal');
    }

}
