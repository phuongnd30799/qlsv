<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'username',
        'firstname',
        'lastname',
        'phone_number',
        'email',
        'gender',
        'identification',
        'address',
        'school_id',
        'deleted_at',
        'deleted_by',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
}
