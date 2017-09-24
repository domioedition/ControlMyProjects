<?php

namespace App\Models;


use App\Model;

class Task extends Model
{
    public $id;
    public $user_id_creator;
    public $user_id_assignee;
    public $task_name;
    public $task_description;
    public $task_date_creation;

    const TABLE = 'tasks';

    public function __get($name)
    {
        switch ($name) {
            case 'user_id_creator':
                return User::find_by_id($this->user_id_creator);
                break;
            default:
                return null;
        }
    }

    public function __isset($name)
    {
        switch ($name) {
            case 'user_id_creator':
                return true;
                break;
            default:
                return null;
        }
    }

}