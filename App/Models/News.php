<?php


namespace App\Models;

use App\Model;

class News extends Model
{
    const TABLE = 'news';

    public $title;
    public $lead;
    public $author_id;


    public function __get($k)
    {
        switch ($k) {
            case 'author':
                return Author::find_by_id($this->author_id);
                break;
            default: return null;
        }
    }

//    public function __isset($k)
//    {
//        switch ($k) {
//            case 'author':
//                return !empty($this->author_id);
//                break;
//            default: return false;
//        }
//    }

}