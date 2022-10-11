<?php
    namespace IoJaegers\Mjoelner\Singletons;

    //
    use IoJaegers\Mjoelner\PHPServerFacade;


    class SingletonFacadeServer
    {
        // Object Constructor
        function __construct()
        {

        }

        function __destruct()
        {

        }

        // Variables
        private ?PHPServerFacade $serverFacade = null;

        // Accessor
        /**
         * @return PHPServerFacade|null
         */
        public function getServerFacade(): ?PHPServerFacade
        {
            if( $this->serverFacade == null )
            {
                $this->setServerFacade( new PHPServerFacade() );
            }

            return $this->serverFacade;
        }

        /**
         * @param PHPServerFacade|null $serverFacade
         */
        public function setServerFacade( ?PHPServerFacade $serverFacade ): void
        {
            $this->serverFacade = $serverFacade;
        }

    }
?>