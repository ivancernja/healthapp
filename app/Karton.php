<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karton extends Model {

    /**
     * Fillable fields
     *
     * @var array
     */
     protected $fillable = [
         'OIB',
         'Datumrodjenja',
         'Imeiprezime',
         'MBO',

     ];

}
