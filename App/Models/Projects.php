<?php

namespace App\Models;


use App\Db;
use App\Model;

class Projects extends Model
{
    public $project_id;
    public $project_name;
    public $project_description;
    public $project_active;
    public $project_creator;
    public $project_date_creation;

    const TABLE = 'projects';

    public function __toString()
    {
        return "asdf";
        // TODO: Implement __toString() method.
    }

    public function getId(){
        return $this->project_id;
    }

    public function getName(){
        return $this->project_name;
    }

}