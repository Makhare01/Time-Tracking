<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $casts = [
        'project_id' => 'array'
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'company_id',
        'project_id',
        'email',
        'role_id',
        'password',
    ];
}
