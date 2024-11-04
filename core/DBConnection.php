<?php

namespace app\core;

use mysqli;

class DBConnection
{
    public function connect()
    {
        $mysqli = new mysqli("localhost", "root", "", "vbis");

        return $mysqli;
    }
}