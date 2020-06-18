<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    public $timestamps = false;

    protected $fillable = [
        'full_name',
        'date_of_birth',
        'city_of_residence',
        'institute',
        'phone_number',
        'whatsapp_number',
        'email_address',
        'academic_interest',
        'preferred_course',
        'cv',
        'agreement_promotional_purpose',
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
