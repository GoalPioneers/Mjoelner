<?php
    namespace IoJaegers\Mjoelner\Server;


    class PHPSServerDomain
    {
        // Constructor
        /**
         * @param $keyStore
         */
        function __construct( $keyStore )
        {
            $this->setKeyStore( $keyStore );
        }

        /**
         *
         */
        function __destruct()
        {

        }

        // Server Settings
        /**
         * @return string
         */
        public final function ServerAddress(): string
        {
            return self::getKeyStore()->retrieveServerAddress();
        }

        /**
         * @return string
         */
        public final function HTTPProtocol(): string
        {
            return self::getKeyStore()->retrieveHTTPProtocol();
        }

        // Related to Request URL
        /**
         * @return string
         */
        public final function Hostname(): string
        {
            return self::getKeyStore()->retrieveHostname();
        }

        /**
         * @return string
         */
        public final function Query(): string
        {
            return self::getKeyStore()->retrieveQuery();
        }

        /**
         * @return string
         */
        public final function Uri(): string
        {
            return self::getKeyStore()->retrieveUri();
        }

        // Variables
        private ?PHPServerKeyStore $keyStore = null;


        // Accessors
        /**
         * @return PHPServerKeyStore|null
         */
        public final function getKeyStore(): ?PHPServerKeyStore
        {
            return $this->keyStore;
        }

        /**
         * @param PHPServerKeyStore|null $keyStore
         */
        public final function setKeyStore( ?PHPServerKeyStore $keyStore ): void
        {
            $this->keyStore = $keyStore;
        }
    }
?>