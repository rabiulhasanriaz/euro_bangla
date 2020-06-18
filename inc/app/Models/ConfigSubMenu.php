<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConfigSubMenu extends Model
{
    protected $table = 'config_sub_menus';

    public $timestamps = false;

    protected $fillable = [
        'menu_id',
        'title',
        'slug',
        'content',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];


    public function menuInfo() {
        return $this->belongsTo('App\Models\ConfigMenu', 'menu_id', 'id');
    }
    
    public function createdInfo() {
        return $this->belongsTo('App\Models\User', 'created_by', 'id');
    }

    public function updatedInfo() {
        return $this->belongsTo('App\Models\User', 'updated_by', 'id');
    }
}
