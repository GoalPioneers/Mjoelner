<?php
    include_once "vendor/autoload.php";

    use IoJaegers\Mjoelner\RouterController
        as Router;

    use \IoJaegers\Mjoelner\Objects\Text\StringBuilderScheme
        as StringBuilder;

    use \IoJaegers\Mjoelner\Objects\Text\Operations\LowerString;


    $v = new Router();


    $builder = new StringBuilder();

    $builder->append('ASDASFDDFAAFSDDAFS:');
    $builder->append(':jnkjekfjefjknjkewfjjnks');

    $builder->toLower(new LowerString());

    echo 'result: ' . $builder->toString();
?>