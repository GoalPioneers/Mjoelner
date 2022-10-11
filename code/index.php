<?php
    include_once "vendor/autoload.php";

    use IoJaegers\Mjoelner\RouterController
        as Router;

    use \IoJaegers\Mjoelner\Objects\Text\StringBuilder
        as StringBuilder;

    $v = new Router();


    $builder = new StringBuilder();

    $builder->append(' t');
    $builder->append('  ');
    $builder->append(' 23');
    $builder->append(' //');
    $builder->append(' 242');
    $builder->append(' A');

    echo 'result: ' . $builder->toString();
?>