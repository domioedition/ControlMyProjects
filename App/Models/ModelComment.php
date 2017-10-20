<?php


namespace App\Models;


use App\Db;

class ModelComment extends Model
{
    const TABLE = 'comments';

    public $project_id;
    public $task_id;
    public $user_id;
    public $content;
    public $date;

    public function __construct()
    {

    }

//    public function __get($k)
//    {
//        switch ($k) {
//            case 'user':
//                return ModelUser::find_by_id($this->user_id);
//                break;
//            default: return null;
//        }
//    }
//
//    public function __isset($k)
//    {
//        switch ($k) {
//            case 'user':
//                return !empty($this->user_id_creator);
//                break;
//            default: return false;
//        }
//    }

    public static function findAllComments($projectId, $taskId)
    {
        $sql = "SELECT * FROM comments WHERE project_id='$projectId' AND task_id='$taskId'";
        $db = Db::instance();
        $result = $db->query('SELECT * FROM ' . static::TABLE . ' WHERE project_id=:project_id AND task_id=:task_id', [':project_id' => $projectId, ':task_id' => $taskId], static::class);
        return $result;
    }

    public static function getCountComments($projectId, $taskId)
    {
        $sql = "SELECT COUNT(*) FROM comments WHERE project_id='$projectId' AND task_id='$taskId'";

    }

}
