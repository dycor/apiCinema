<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{

  protected $fillable = [
      'id', 'cinemaName','city','adress','zip'
  ];

}
