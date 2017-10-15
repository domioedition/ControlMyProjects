<?php

namespace App\Models;

use App\Model;


/**
 *
 */
class ModelNews extends Model
{
    const TABLE = 'news';

    public $title;
    public $lead;
    public $author_id;
    /**
     * LAZY LOAD
     */
    public function __get($k)
    {
//        switch ($k) {
//            case 'author':
//                return Author::findById($this->author_id);
//                break;
//            default: return null;
//        }
    }
    public function __isset($k)
    {
//        switch ($k) {
//            case 'author':
//                return !empty($this->author_id);
//                break;
//            default: return false;
//        }
    }
}

?>