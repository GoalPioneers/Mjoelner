<?php
    namespace IoJaegers\Mjoelner\Types;


    enum RequestTypes
    {
        case Get;

        case Update;
        case Delete;

        case Head;

        case Put;
        case Patch;
        case Post;

        case Options;
    }
?>