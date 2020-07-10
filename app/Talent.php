<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Talent extends Model
{
  	protected $table = 'talents';
  	protected $fillable = ['status'];
}
