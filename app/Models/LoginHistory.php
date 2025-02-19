<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LoginHistory extends Model
{
    use HasFactory;

    // Define the table name if it's different from the default
    protected $table = 'login_history';  // Change this if your table name is different

    // Define the fillable properties (columns you want to mass assign)
    protected $fillable = [
        'user_name', 'user_email', 'ip_address', 'user_agent', 'logged_in_at',
    ];
}
