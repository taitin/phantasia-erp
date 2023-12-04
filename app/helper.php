<?php

if (!function_exists('arrayToXml')) {
    /**
     * arrayToXml
     *
     * @param  mixed $array
     * @param  mixed $rootElement
     * @param  mixed $xml
     * @return void
     */
    function arrayToXml($array, $rootElement = null, $xml = null)
    {
        $_xml = $xml;

        // If there is no Root Element then insert root
        if ($_xml === null) {
            $_xml = new DOMDocument('1.0', 'UTF-8');
            $_xml->formatOutput = true;
            $root = $_xml->createElement($rootElement);
            $_xml->appendChild($root);
        }

        // Visit all key value pair
        foreach ($array as $k => $v) {
            // If there is nested array then
            if (is_array($v)) {
                // Call function for nested array
                arrayToXml($v, $k, $_xml->documentElement);
            } else {
                // Simply add child element.
                $root->appendChild($_xml->createElement($k, $v));
            }
        }

        return $_xml->saveXML();
    }
}
