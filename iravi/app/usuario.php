<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $primaryKey='idusuario';
        protected $table='usuario';
		public $timestamps = false;
}
