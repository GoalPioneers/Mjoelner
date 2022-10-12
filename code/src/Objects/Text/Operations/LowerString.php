<?php
    namespace IoJaegers\Mjoelner\Objects\Text\Operations;

    use IoJaegers\Mjoelner\Objects\Text\Operations\Templates\TextTransformationString;


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
         * @return string
         */
        protected function section( string $in,
                                    int $begin,
                                    int $end ):
            string
        {
            $retrievedText = null;

            if( $end == null )
            {
                $retrievedText = substr( $in, $begin );
                $retrievedText = strtolower( $retrievedText );
                echo "\n : " . $retrievedText;
            }
            else
            {

            }


            return $retrievedText;
        }

        /**
         * @param string $in
         * @return string
         */
        protected function whole( string $in ):
            string
        {
            return strtolower( $in );
        }


    }
?>