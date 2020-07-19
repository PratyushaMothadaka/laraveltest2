<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model //php artisan make:model <model-name>
{
    protected $table='empdetails'; //telling this model about our database;
}
