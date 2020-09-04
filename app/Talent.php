<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Nicolaslopezj\Searchable\SearchableTrait;

class Talent extends Model
{
    use SearchableTrait;

  	protected $table = 'talents';
  	
  	protected $fillable = ['status'];
    
    protected $searchable = [
        'columns' => [
            '.name' => 1,
            '.profession' => 1,
        ]
    ];


}
