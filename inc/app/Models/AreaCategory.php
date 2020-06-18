<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaCategory extends Model
{
    protected $table = 'area_category';
    protected $fillable = 
    [
    	'area_cat_name',
    	'created_at',
    	'updated_at',
    ];
    protected $primaryKey = 'id';
    public $timestamps = false; 
}
