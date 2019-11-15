<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class carritotemporal extends Model
{
    protected $table='carritotemporal';
	public $timestamps = false;

  protected $primaryKey = ['fkproducto', 'fkpersona'];
  public $incrementing = false;


  protected function setKeysForSaveQuery(Builder $query)
    {

        $query
            ->where('fkproducto', '=', $this->getAttribute('fkproducto'))
            ->where('fkpersona', '=', $this->getAttribute('fkpersona'));
        return $query;
    }

}
