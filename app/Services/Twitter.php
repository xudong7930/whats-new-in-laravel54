<?php

namespace App\Services;

class Twitter
{
    public function __construct ()
    {
     
    }

    public static function publish($content)
    {
        echo "publish: ".$content;
    }
}
