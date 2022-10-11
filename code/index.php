<?php
    include_once "vendor/autoload.php";

    use IoJaegers\Mjoelner\RouterController
        as Router;

    use \IoJaegers\Mjoelner\Objects\Base\StringBuilder
        as StringBuilder;

    $v = new Router();

    $builder = new StringBuilder();

    echo 'result' . $builder->toString();
?>