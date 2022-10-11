<?php
    namespace IoJaegers\Mjoelner;


    class PHPCookieKeyStore
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
            return $_SERVER[ $value ];
        }
    }
?>