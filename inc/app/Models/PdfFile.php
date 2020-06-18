<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PdfFile extends Model
{
    protected $table = 'pdf_files';
    protected $fillable = 
    [
    	'title',
    	'pdf',
    	'status',
    	'created_at',
    	'created_by',
    	'updated_at',
    	'updated_by'
    ];
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
