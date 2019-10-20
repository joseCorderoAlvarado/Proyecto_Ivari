<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
		protected $primaryKey = 'idproducto';
        protected $table='producto';
				public $timestamps = false;
}
