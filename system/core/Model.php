<?php

namespace system\core;

class Model
{
    public $db;


    public function __construct()
    {
        $this->db = new DB();
    }



}