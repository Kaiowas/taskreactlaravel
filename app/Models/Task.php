<?php

namespace App\Models;

use App\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
