<?php
    namespace IoJaegers\Mjoelner\Objects\Text\Operations;


    /**
     *
     */
    class UpperString
        extends OperationString
    {
        /**
         *
         */
        public function __construct()
        {

        }

        /**
         * @return void
         */
        public function __deconstruct()
        {

        }

        /**
         * @param string $in
         * @return string
         */
        public function applyOperation( string $in ): string
        {
            return strtoupper( $in );
        }

    }
?>