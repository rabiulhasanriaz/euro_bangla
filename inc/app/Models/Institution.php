<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $table = 'institutions';

    public $timestamps = false;

    protected $fillable = [
        'institute_name',
        'institute_country',
        'institute_address',
        'institute_website',
        'contact_person_name',
        'phone_number',
        'email',
        'alternative_email',
        'sponsorship',
        'sponsorship_package',
        'meeting',
        'meeting_time',
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
