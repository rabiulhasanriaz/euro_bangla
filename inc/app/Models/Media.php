<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'image',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];


    public function createdInfo() {
        return $this->belongsTo('App\Models\User', 'created_by', 'id');
    }

    public function updatedInfo() {
        return $this->belongsTo('App\Models\User', 'updated_by', 'id');
    }
}
