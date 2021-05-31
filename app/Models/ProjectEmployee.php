<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectEmployee extends Model
{
    use HasFactory;
    
    protected $table = 'project_employee';

    protected $fillable = [
        'project_id',
        'employee_email',
    ];
}
