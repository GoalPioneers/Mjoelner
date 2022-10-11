<?php
    namespace IoJaegers\Mjoelner\Objects\Base;

    /**
     *
     */
    abstract class OperationString
    {
        /**
         * @param string $in input String
         * @return string output
         */
        public abstract function applyOperation( string $in ): string;
    }
?>