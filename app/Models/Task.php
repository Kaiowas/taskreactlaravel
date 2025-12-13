<?php

namespace App\Models;

use App\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'status',
        'due_date',
    ];
    protected $casts = [
        'title' => 'string',
        'status' => TaskStatus::class,
        'due_date' => 'datetime:d/m/Y',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
