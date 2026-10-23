<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    protected $fillable = ['name', 'industry', 'founder', 'logo', 'website', 'description'];
}
