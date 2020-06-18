<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeedbackMessage extends Model
{
    protected $table = 'feedback_messages';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'read_status',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
}
