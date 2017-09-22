<?php

namespace App\Models;


use App\Model;

class Task extends Model implements IBasicTask
{
    public $id;
    public $user_id_creator;
    public $user_id_assignee;
    public $task_name;
    public $task_description;
    public $task_date_creation;

    const TABLE = 'tasks';

    public function createTask()
    {
    }

    public function deleteTask()
    {
    }

    public function updateTask()
    {
    }

    public function showTask()
    {
    }

    public function assignTask()
    {
    }
}