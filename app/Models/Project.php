<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;
    protected $fillable = ['title', 'description', 'start_date', 'due_date', 'finish_date'];
    protected $cast = [
        'start_date' => 'date',
        'due_date' => 'date',
        'finish_date' => 'date',
    ];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
