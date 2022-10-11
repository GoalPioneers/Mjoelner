<?php
    namespace IoJaegers\Mjoelner\Posts;


    class PHPPostsKeyStore
    {
        function __construct()
        {

        }

        function __destruct()
        {

        }


        /**
         * @param string $value
         * @return mixed
         */
        protected final function retrieveKey( string $value ): mixed
        {
            return $_COOKIE[ $value ];
        }
    }
?>