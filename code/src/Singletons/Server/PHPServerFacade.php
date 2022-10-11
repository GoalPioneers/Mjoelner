<?php
    namespace IoJaegers\Mjoelner\Server;


    class PHPServerFacade
    {
        function __construct()
        {
            $this->setKeyStore(
                new PHPServerKeyStore()
            );

            $this->setServerDomain(
                new PHPSServerDomain(
                    $this->getKeyStore()
                )
            );
        }

        function __destruct()
        {

        }

        // Variables
        private ?PHPServerKeyStore $keyStore = null;
        private ?PHPSServerDomain $serverDomain = null;


        // Accessors
        /**
         * @return PHPServerKeyStore|null
         */
        public function getKeyStore(): ?PHPServerKeyStore
        {
            return $this->keyStore;
        }

        /**
         * @param PHPServerKeyStore|null $keyStore
         * @return void
         */
        public function setKeyStore( ?PHPServerKeyStore $keyStore ): void
        {
            $this->keyStore = $keyStore;
        }


        /**
         * @return PHPSServerDomain|null
         */
        public function getServerDomain(): ?PHPSServerDomain
        {
            return $this->serverDomain;
        }

        /**
         * @param PHPSServerDomain|null $serverDomain
         */
        public function setServerDomain( ?PHPSServerDomain $serverDomain ): void
        {
            $this->serverDomain = $serverDomain;
        }
    }
?>