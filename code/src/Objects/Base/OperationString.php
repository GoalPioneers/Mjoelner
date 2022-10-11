<?php
    namespace IoJaegers\Mjoelner\Objects\Base;

    /**
     *
     */
    abstract class OperationString
    {
        /**
         * @param string $str
         * @return string
         */
        public abstract function applyOperation( string $str ): string;
    }
?>