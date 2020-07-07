<?php

namespace App\Repositories;

use App\User;
use App\Task;

class TaskRepository
{
    public function forUser(User $user)
    {
        $user_id = $user->id;
        return Task::orderBy('created_at', 'asc')
                    ->get();
    }
}
