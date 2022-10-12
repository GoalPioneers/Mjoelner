<?php
    include_once "vendor/autoload.php";

    use IoJaegers\Mjoelner\RouterController
        as Router;

    use \IoJaegers\Mjoelner\Objects\Text\StringBuilderScheme
        as StringBuilder;


    $v = new Router();


    $builder = new StringBuilder();

    $builder->append('ASDASFDDFAAFSDDAFS:');
    $builder->append(':jnkjekfjefjknjkewfjjnks');


    echo 'result: ' . $builder->toString();
?>