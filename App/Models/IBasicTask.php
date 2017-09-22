<?php

namespace App\Models;


interface IBasicTask
{
    public function createTask();
    public function deleteTask();
    public function updateTask();
    public function showTask();
    public function assignTask();
}