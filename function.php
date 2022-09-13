<?php

function maximum($users)
{
    $max = 0;
    foreach ($users as $user) 
    {
        if ($user['age'] > $max) {
            $max = $user['age'];
        };
    };
    return $max;
};

require 'index.php';