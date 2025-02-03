<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;
    protected $fillable = ['title', 'description', 'start_date', 'due_date', 'finish_date'];
    protected $casts = [
        'start_date' => 'date:d-m-Y',
        'due_date' => 'date',
        'finish_date' => 'date',
    ];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
