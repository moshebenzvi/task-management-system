<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;
    protected $fillable = ['projects_id', 'title', 'description', 'status', 'priority', 'due_date', 'finish_date'];
    protected $cast = [
        'due_date' => 'date',
        'finish_date' => 'date',
    ];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
