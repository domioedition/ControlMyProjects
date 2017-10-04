<?php


namespace App\Models;


use App\Model;

class ModelComment extends Model
{
    const TABLE = 'comments';

    public $project_id;
    public $task_id;
    public $user_id;
    public $content;
    public $date;

    public function __get($k)
    {
        switch ($k) {
            case 'user':
                return ModelUser::find_by_id($this->user_id);
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