<?php

if (!function_exists('d')) {
    /**
     * It is an alias for the dump() function.
     *
     * @param mixed $var
     * @param mixed ...$moreVars
     * @return array|mixed
     */
    function d($var, ...$moreVars)
    {
        return dump($var, ...$moreVars);
    }
}