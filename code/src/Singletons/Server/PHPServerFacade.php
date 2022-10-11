<?php
    namespace IoJaegers\Mjoelner;

    class PHPServerFacade
    {
        function __construct()
        {
            $this->setKeyStore( new PHPServerKeyStore() );
        }

        function __destruct()
        {

        }

        // Variables
        private $keyStore = null;

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
    }
?>