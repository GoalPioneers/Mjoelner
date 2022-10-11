<?php
    namespace IoJaegers\Mjoelner\Objects\Base;


    /**
     *
     */
    class StringBuilder
    {
        //
        /**
         *
         */
        public function __construct()
        {
            $this->setOperations( array() );
        }

        /**
         *
         */
        function __destruct()
        {

        }


        /**
         * @param string $values
         * @return void
         */
        public function append( string $values ): void
        {

        }

        /**
         * @param array $values
         * @return void
         */
        public function delete( array $values ): void
        {

        }

        /**
         * @param int $at
         * @param string $str
         * @return void
         */
        public function insert( int $at, string $str ): void
        {

        }

        /**
         * @return string|null
         */
        public function toString(): ?string
        {
            return null;
        }

        /**
         * @return void
         */
        public final function clearCache()
        {
            $this->cache = null;
        }

        // Variables
        private ?string $buffer = null;
        private ?string $cache  = null;

        private ?array $operations;

        private static int $defaultStringLength = 25;



        // Accessors
        /**
         * @return string|null
         */
        public final function getBuffer(): ?string
        {
            return $this->buffer;
        }

        /**
         * @param string|null $buffer
         */
        public final function setBuffer(?string $buffer ): void
        {
            $this->buffer = $buffer;
        }

        /**
         * @return bool
         */
        public final function isLineNull(): bool
        {
            return $this->buffer == null;
        }

        /**
         * @return string|null
         */
        public final function getCache(): ?string
        {
            return $this->cache;
        }

        /**
         * @param string|null $cache
         */
        public final function setCache( ?string $cache ): void
        {
            $this->cache = $cache;
        }

        /**
         * @return bool
         */
        public final function isCacheNull(): bool
        {
            return $this->cache == null;
        }

        /**
         * @return array|null
         */
        public function getOperations(): ?array
        {
            return $this->operations;
        }

        /**
         * @param array|null $operations
         */
        public function setOperations( ?array $operations ): void
        {
            $this->operations = $operations;
        }

        /**
         * @return bool
         */
        public function isOperationsNull(): bool
        {
            return $this->operations == null;
        }

        /**
         * @return bool
         */
        public function isOperationsEmpty(): bool
        {
            return count( $this->operations );
        }

        /**
         * @return int
         */
        public static function getDefaultStringLength(): int
        {
            return self::$defaultStringLength;
        }

        /**
         * @param int $defaultStringLength
         */
        public static function setDefaultStringLength( int $defaultStringLength ): void
        {
            self::$defaultStringLength = $defaultStringLength;
        }
    }
?>