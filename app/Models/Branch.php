<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;


class Branch extends Model
{
    /** @use HasFactory<\Database\Factories\BranchFactory> */
    use HasFactory, LogsActivity;


    protected static $logAttributes = ['name', 'status', 'code'];


    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['name', 'status', 'code']);
        // Chain fluent methods for configuration options
    }

    protected $table = 'branches'; // Specify the table name if it's not plural.

    protected $fillable = [
        'uuid', 'parent_id', 'name', 'status', 'description', 'code'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function parent()
    {
        return $this->belongsTo(Branch::class, 'parent_id');
    }

    // Define the children relationship
    public function children()
    {
        return $this->hasMany(Branch::class, 'parent_id');
    }
}
