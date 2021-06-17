<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'description',
        'company_id',
        'project_status',
    ];

    public function employees() {
        return $this->belongsToMany(Employee::class, 'project_employee');
    }
}
