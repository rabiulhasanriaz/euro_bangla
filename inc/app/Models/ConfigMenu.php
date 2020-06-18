<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConfigMenu extends Model
{
    protected $table = 'config_menus';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'serial',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];


    public function subMenus() {
        return $this->hasMany('App\Models\ConfigSubMenu', 'menu_id', 'id');
    }

    public function createdInfo() {
        return $this->belongsTo('App\Models\User', 'created_by', 'id');
    }

    public function updatedInfo() {
        return $this->belongsTo('App\Models\User', 'updated_by', 'id');
    }


    public static function active_menu($page_slug){
        $page_content = ConfigSubMenu::where('slug', $page_slug)->first();
        if (empty($page_content)) {
            $page_content = ConfigMenu::where('slug', $page_slug)->first();
            
        }
        
        $sub_menu = ConfigSubMenu::where('slug', $page_slug)->first();
        if(!empty($sub_menu)) {
            $active_menu = ConfigMenu::find($sub_menu->menu_id);
        } else {
            $active_menu = ConfigMenu::where('slug', $page_slug)->first();
        }

        return $active_menu->slug;
    }
}
