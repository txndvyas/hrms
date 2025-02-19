<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;

    protected $table = 'employees'; // Specify the table name if it's not plural.
    //protected $primaryKey = 'id';     // Specify primary key (optional if it’s 'id').


}
