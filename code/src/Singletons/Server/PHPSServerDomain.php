<?php
    namespace IoJaegers\Mjoelner;


    class PHPSServerDomain
    {
        // Constructor
        function __construct( $keyStore )
        {
            $this->setKeyStore( $keyStore );
        }

        function __destruct()
        {

        }


        // Variables
        private ?PHPServerKeyStore $keyStore = null;


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
         */
        public function setKeyStore( ?PHPServerKeyStore $keyStore ): void
        {
            $this->keyStore = $keyStore;
        }
    }
?>