<?php

namespace App\Controller;

class DefaultController
{
    public static function homePage()
    {
        echo 'Hello World From homepage!';
    }

    public static function test()
    {
        echo 'Hello World Form test page!';
    }

    public static function error404()
    {
        echo '404 Not Found!';
    }
}
