<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Nicolaslopezj\Searchable\SearchableTrait;

class Talent extends Model
{
<<<<<<< HEAD
    protected $fillable = ['status'];
=======
    use SearchableTrait;

  	protected $table = 'talents';
  	
  	protected $fillable = ['status'];
    
    protected $searchable = [
        'columns' => [
            '.name' => 1,
            '.profession' => 1,
        ]
    ];


>>>>>>> f9bd50c7998f8eda0afa4b4494d0a5a85eb04d34
}
