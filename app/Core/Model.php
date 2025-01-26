<?php

namespace App\Core;

use mysqli;

class Model
{
    protected mysqli $db;

    public function __construct()
    {
        require_once '../config/config.php';
        $this->db = connect();
    }
}
