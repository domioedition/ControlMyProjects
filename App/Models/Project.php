<?php

namespace App\Models;


use App\Db;
use App\Model;

class Project extends Model
{
    public $id;
    public $project_name;
    public $project_description;
    public $project_active;
    public $project_creator;
    public $project_date_creation;

    const TABLE = 'projects';

    public function __toString()
    {
        $result = "Running method ".__METHOD__;
        return $result;
        // TODO: Implement __toString() method.
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->project_name;
    }

}