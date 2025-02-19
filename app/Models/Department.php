<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /** @use HasFactory<\Database\Factories\DepartmentFactory> */

    use HasFactory;

    protected $table = 'departments'; // Specify the table name if it's not plural.
    //protected $primaryKey = 'id';     // Specify primary key (optional if it’s 'id').

    protected $fillable = [
        'uuid', 'name', 'description', 'status'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
