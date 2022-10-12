<?php
    namespace IoJaegers\Mjoelner\Objects\Text\Operations;


    /**
     * 
     */
    class LowerString
        extends TextTransformationString
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
         * @param int $begin
         * @param int $end
         * @return mixed|void
         */
        protected function section( string $in,
                                    int $begin,
                                    int $end )
        {
            // TODO: Implement section() method.
        }

        /**
         * @param string $in
         * @return mixed|void
         *
         */
        protected function whole( string $in )
        {
            // TODO: Implement whole() method.
        }


    }
?>