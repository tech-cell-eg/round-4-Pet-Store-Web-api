<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dog extends Model
{
    //
// id	name	gender	age	size	color	sku	vaccinated	dewormed	'cert'	microchip	location	published_date	add_info	image	

protected $fillable = ['id','name',	'gender','age',	'size','color','sku','cert','vaccinated',
'dewormed','microchip','published_date','add_info'	,'image','location'];
}
