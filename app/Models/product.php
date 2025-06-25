<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //id	name	type	size	price	image	
protected $fillable = ['id','name','type','size','price','image'	];
}
