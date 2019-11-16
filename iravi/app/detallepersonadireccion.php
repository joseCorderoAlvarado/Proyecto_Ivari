<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class detallepersonadireccion extends Model
{
        protected $table='detallepersonadireccion';
		public $timestamps = false;



    protected $primaryKey = ['fkpersona', 'fk_direccion'];
    public $incrementing = false;


    protected function setKeysForSaveQuery(Builder $query)
      {

          $query
              ->where('fkpersona', '=', $this->getAttribute('fkpersona'))
              ->where('fk_direccion', '=', $this->getAttribute('fk_direccion'));
          return $query;
      }

}
