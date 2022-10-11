<?php
    namespace IoJaegers\Mjoelner;


    class PHPServerKeyStore
    {
        function __construct()
        {

        }

        function __destruct()
        {

        }

        /**
         * @return string
         */
        public function retrieveHostname(): string
        {
            return self::retrieveKey( 'HTTP_HOST' );
        }

        /**
         * @return string
         */
        public function retrieveQuery(): string
        {
            return self::retrieveKey( 'QUERY_STRING' );
        }

        /**
         * @return string
         */
        public function retrieveUri(): string
        {
            return self::retrieveKey( 'REQUEST_URI' );
        }

        /**
         * @return string
         */
        public function retrieveUserAgent(): string
        {
            return self::retrieveKey( 'HTTP_REFERER' );
        }

        /**
         * @return string
         */
        public function retrieveRequestMethod(): string
        {
            return $this->retrieveKey( 'REQUEST_METHOD' );
        }

        /**
         * @return string
         */
        public function retrieveHTTPProtocol(): string
        {
            return self::retrieveKey( 'SERVER_PROTOCOL' );
        }

        /**
         * @return string
         */
        public function retrieveServerAddress(): string
        {
            return self::retrieveKey( 'SERVER_ADDR' );
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