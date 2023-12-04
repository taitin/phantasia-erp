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
        }
        $set_root = false;
        if ($rootElement !== null) {
            $root = $_xml->createElement($rootElement);
        } else $root = null;
        // Visit all key value pair
        foreach ($array as $k => $v) {
            // If there is nested array then
            if (is_array($v)) {
                // Call function for nested array
                if (!is_numeric($k)) $key = $k;
                else $key = $rootElement;
                if (!empty($root))
                    arrayToXml($v, $key, $root);
                else  arrayToXml($v, $key, $_xml);
            } else {
                if (!$set_root) {
                    $_xml->appendChild($root);
                    $set_root = true;
                }

                // Simply add child element.
                if (!isset($root)) $_xml->appendChild($_xml->createElement($k, $v));
                else  $root->appendChild($_xml->createElement($k, $v));
            }
        }

        return $_xml->saveXML();
    }
}

if (!function_exists('sanitizeElementName')) {
    /**
     * sanitizeElementName
     *
     * @param  mixed $name
     */
    function sanitizeElementName($name)
    {
        // Replace invalid characters with underscores or remove them
        return preg_replace('/[^a-zA-Z0-9\_\-]/', '_', $name);
    }
}

if (!function_exists('xmlToArray')) {

    /**
     * xmlToArray
     *
     * @param  mixed $xmlString
     * @return void
     */
    function xmlToArray($xmlString)
    {

        // Load the XML string into a SimpleXMLElement
        $xmlObject = simplexml_load_string($xmlString);

        // Convert the SimpleXMLElement to a JSON string
        $jsonString = json_encode($xmlObject);

        // Decode the JSON string to a PHP array
        return json_decode($jsonString, true);
    }
}
