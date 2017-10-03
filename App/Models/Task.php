<?php


namespace App\Models;

use App\Model;
use App\Db;

class Task extends Model
{
    const TABLE = 'tasks';

    public $user_id_creator;
    public $user_id_assignee;
    public $task_name;
    public $task_description;
    public $task_date_creation;
    public $task_status;

    public function __get($k)
    {
        switch ($k) {
            case 'user':
                return ModelUser::find_by_id($this->user_id_creator);
                break;
            default:
                return null;
        }
    }

    public function __isset($k)
    {
        switch ($k) {
            case 'user':
                return !empty($this->user_id_creator);
                break;
            default:
                return false;
        }
    }


    public static function get_all_tasks_for_project_id($id)
    {
        $db = Db::instance();
        $sql = $sql = "SELECT * FROM " . static::TABLE.' WHERE id=:id';
        $result = $db->query($sql, [':id' => $id], static::class)[0];
        return $result;
    }

}
