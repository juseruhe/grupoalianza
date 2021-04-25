<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document_Type extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'document_types';

    protected $fillable = [

        'name','acronym'
    ];
}
