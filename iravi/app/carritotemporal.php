<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carritotemporal extends Model
{
    protected $table='carritotemporal';
	public $timestamps = false;


  protected function setKeysForSaveQuery(Builder $query)
    {
        $query
            ->where('pk_1', '=', $this->getAttribute('pk_1'))
            ->where('pk_2', '=', $this->getAttribute('pk_2'));
        return $query;
    }

}
