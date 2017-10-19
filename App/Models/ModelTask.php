<?php


namespace App\Models;


class ModelTask extends Model
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
//            case 'user':
//                return ModelUser::find_by_id($this->user_id_creator);
//                break;
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


//    public static function get_all_tasks_for_project_id($id)
//    {
//        $db = Db::instance();
//        $sql = "SELECT * FROM " . static::TABLE.' WHERE id=:id';
//        $result = $db->query($sql, [':id' => $id], static::class)[0];
//        return $result;
//    }

    public function getTaskStatus()
    {
        return $this->task_status;
    }

    public function setTaskStatus($status)
    {
        $db = Db::instance();
        $sql = 'UPDATE ' . static::TABLE . ' SET task_status=' . $status . ' WHERE id=' . $this->id;
        $result = $db->execute($sql, []);
        return $result;
    }


    public function getAssign(){
        return $this->user_id_assignee;
    }

    public function setAssign($userAssignee){
        $db = Db::instance();
        $sql = 'UPDATE ' . static::TABLE . ' SET user_id_assignee=' . $userAssignee . ' WHERE id=' . $this->id;
        $result = $db->execute($sql, []);
        return $result;
    }

}
