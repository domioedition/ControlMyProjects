<?php


namespace App\Models;

use App\Model;

class Task extends Model
{
    const TABLE = 'tasks';

    public $user_id_creator;
    public $user_id_assignee;
    public $task_name;
    public $task_description;
    public $task_date_creation;


    public function __get($k)
    {
        switch ($k) {
            case 'user':
                return User::find_by_id($this->user_id_creator);
                break;
            default: return null;
        }
    }

    public function __isset($k)
    {
        switch ($k) {
            case 'user':
                return !empty($this->user_id_creator);
                break;
            default: return false;
        }
    }

}