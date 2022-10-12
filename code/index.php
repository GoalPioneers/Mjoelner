<?php
    include_once "vendor/autoload.php";

    use IoJaegers\Mjoelner\RouterController
        as Router;

    use \IoJaegers\Mjoelner\Objects\Text\StringBuilder
        as StringBuilder;

    use IoJaegers\Mjoelner\Objects\Text\Operations\DeleteString;

    $v = new Router();


    $builder = new StringBuilder();


    echo 'result: ' . $builder->toString();
?>