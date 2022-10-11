<?php
    namespace IoJaegers\Mjoelner\Objects\Text\Operations;

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