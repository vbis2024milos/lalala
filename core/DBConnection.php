<?php

namespace app\core;

use mysqli;

class DBConnection
{
    public function connect() : mysqli
    {
        $mysqli = new mysqli("localhost", "root", "", "mojvbis");

        return $mysqli;
    }
}