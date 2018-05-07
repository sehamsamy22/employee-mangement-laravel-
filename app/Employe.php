<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
  protected $fillable = [
  'fristname', 'lastname','job','status','image','location'
];
}
