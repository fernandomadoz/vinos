<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Varietal extends Model
{
	protected $guarded = ['id'];     

    public function descrip_modelo()
    {    
        return $this->seccion->seccion.' - '.$this->varietal;
    }

    public function seccion()
    {
        return $this->belongsTo('App\Seccion');
    }

    protected $table = 'varietales';
}
