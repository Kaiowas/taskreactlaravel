<?php

namespace App\Enums;

enum TaskStatus: string
{
    case Pending = 'pending';
    case In_Progress = 'in_progress';
    case Completed = 'completed';
}
