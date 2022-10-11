<?php
    namespace IoJaegers\Mjoelner;

    class PHPServerFacade
    {
        function __construct()
        {

        }

        function __destruct()
        {

        }

        // Variables
        private $keyStore = null;

        // Accessors
        /**
         * @return null
         */
        public function getKeyStore()
        {
            return $this->keyStore;
        }

        /**
         * @param null $keyStore
         */
        public function setKeyStore( $keyStore ): void
        {
            $this->keyStore = $keyStore;
        }
    }
?>