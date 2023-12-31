<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceParent extends Model
{
    use HasFactory;

    protected $fillable = [
        'month',
        'year',
        'date',
        'employee_id',
        'working_hour',
        'status',
        'soft_delete'
    ];
}
