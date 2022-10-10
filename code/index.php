<?php
    include_once "vendor/autoload.php";

    use IoJaegers\Mjoelner\RouterController
        as Router;

    $v = new Router();


    echo $_SERVER['PATH_INFO'] . "t";

?>