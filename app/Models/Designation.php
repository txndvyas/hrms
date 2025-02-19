<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    /** @use HasFactory<\Database\Factories\DesignationFactory> */
    use HasFactory;

    protected $table = 'designations'; // Specify the table name if it's not plural.
    //protected $primaryKey = 'id';     // Specify primary key (optional if it’s 'id').

    protected $fillable = [
        'uuid', 'parent_id', 'name', 'status', 'description'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
        // Define the parent relationship
        public function parent()
        {
            return $this->belongsTo(Designation::class, 'parent_id');
        }

        // Define the children relationship
        public function children()
        {
            return $this->hasMany(Designation::class, 'parent_id');
        }
}
