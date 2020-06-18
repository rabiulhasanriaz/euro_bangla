<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area_of_study extends Model
{
    protected $table = 'area_of_studies';
    protected $fillable = 
    [
    	'area_name',
    	'area_cat',
    	'created_at',
    	'updated_at',
    ];
    protected $primaryKey = 'id';
    public $timestamps = false; 

    public function catName(){
    	return $this->belongsTo('App\Models\AreaCategory','area_cat','id');
    }
}
