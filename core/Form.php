<?php

namespace app\core;

class Form
{
    public function valid($params,$argument)
    {
        if ($params != null && $params->errors != null) {
            foreach ($params->errors as $attribute => $error) {
                if ($attribute == $argument) {
                    echo "<span class='text-danger'>$error[0]</span>";
                }
            }
        }
    }
}