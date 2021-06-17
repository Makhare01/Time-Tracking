<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $table = 'works';

    protected $fillable = [
        'user_id',
        'user_email',
        'company_id',
        'project',
        'startedAt',
        'finishedAt',
        'total_time',
        'rows',
        'status',
    ];
}
