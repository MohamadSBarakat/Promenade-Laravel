<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    // Table Name
    protected $table = 'promos';
    // Primary Key
    public $primaryKey = 'id';
    // TimeStamps
    public $timesstamps = true;
}
