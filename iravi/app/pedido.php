<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
        protected $table='pedido';
        protected $primaryKey='folio';
        public $timestamps = false;
}
