<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = 'visitor';
    protected $fillable = 
    [
    	'full_name',
    	'represnted_organization',
    	'sector',
    	'email',
        'phone_number',
        'whatapp_number',
        'agreement'
    ];
    protected $primaryKey = 'id';
    public $timestamps = false; 

}
