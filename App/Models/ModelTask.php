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


//    public function __construct($userIdCreator, $userIdAssignee = 0, $taskName, $taskDescription, $taskStatus = 0)
//    {
//        parent::__construct();
//        $this->user_id_creator = $userIdCreator;
//        $this->user_id_assignee = $userIdAssignee;
//        $this->task_name = $taskName;
//        $this->task_description = $taskDescription;
//        $this->task_date_creation = time();
//        $this->task_status = $taskStatus;
//
//    }

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


    public function getAssign()
    {
        return $this->user_id_assignee;
    }

    public function setAssign($userAssignee)
    {
        $db = Db::instance();
        $sql = 'UPDATE ' . static::TABLE . ' SET user_id_assignee=' . $userAssignee . ' WHERE id=' . $this->id;
        $result = $db->execute($sql, []);
        return $result;
    }

}
