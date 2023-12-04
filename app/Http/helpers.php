<?php

if (!function_exists('arrayToXml')) {
    /**
     * arrayToXml
     *
     * @param  mixed $array
     * @param  mixed $root
     * @param  mixed $xml
     * @return void
     */
    function arrayToXml($array, DOMElement $root, DOMDocument $xml, $tag = '')
    {
        foreach ($array as $key => $value) {
            $key = sanitizeElementName($key);
            if (is_array($value)) {
                if (!is_numeric($key)) {

                    if (is_numeric(array_key_first($value))) {
                        arrayToXml($value, $root, $xml, $key);
                    } else {
                        $subnode = $xml->createElement($key);
                        $root->appendChild($subnode);
                        arrayToXml($value, $subnode, $xml);
                    }
                } else {
                    // Only create a new node if the array is not empty
                    $itemNode = $xml->createElement($tag ?? $root->tagName);
                    $root->appendChild($itemNode);
                    arrayToXml($value, $itemNode, $xml);
                }
            } else {
                $value = ($value === null) ? 'NULL' : $value; // Handle NULL values
                $element = $xml->createElement($key, htmlspecialchars($value));
                $root->appendChild($element);
            }
        }
    }
}
if (!function_exists('convertArrayToXml')) {

    /**
     * convertArrayToXml
     *
     * @param  mixed $data
     * @param  mixed $rootElement
     * @return void
     */
    function convertArrayToXml($data, $rootElement = 'root')
    {
        $xml = new DOMDocument('1.0', 'UTF-8');
        $xml->formatOutput = true;
        $root = $xml->createElement($rootElement);
        $root->setAttribute('xsi:schemaLocation', 'urn:KYYO:API:ORDER:1.0 ORDER.xsd');
        $root->setAttribute('xmlns', 'urn:KYYO:API:ORDER:1.0');
        $root->setAttribute('xmlns:xsi:schemaLocation', "http://www.w3.org/2001/XMLSchema-instance");

        $xml->appendChild($root);
        arrayToXml($data, $root, $xml);
        return $xml->saveXML();
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
