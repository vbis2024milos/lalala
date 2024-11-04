<?php

namespace app\core;

class DBConnection
{
    public function connect()
    {
        $mysqli = new mysqli("localhost", "root", "", "vbis");

        return $mysqli;
    }
}