<?php
/**
 * Created by PhpStorm.
 * User: Марсиус
 * Date: 01.10.2017
 * Time: 18:26
 */

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