<?php

use App\Models\ProductMap;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

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
    function convertArrayToXml($data, $rootElement = 'root', $attributes = [])
    {
        $xml = new DOMDocument('1.0', 'UTF-8');
        $xml->formatOutput = true;
        $root = $xml->createElement($rootElement);
        foreach ($attributes as $key => $attribute) {
            $root->setAttribute($key, $attribute);
        }


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

if (!function_exists('getZip')) {
    /**
     * orderToken
     *
     * @param  mixed $url
     * @return string
     */
    function getZip($address)
    {
        if ($address == '自取') return '23159';
        $response = Http::get('http://zip5.5432.tw/zip5json.py', [
            'adrs' =>  preg_replace('/^\d+\s*/', '', $address),
        ]);

        if ($response->ok()) {
            $result = $response->json();
            return $result['zipcode'] ?? $result['zipcode6'] ?? '';
        } else {
            // $status = $response->status();
            // $message = $response->body();
            return '';
        }
    }
}

if (!function_exists('getFtpFile')) {
    /**
     * getFtpFile
     *
     * @param  mixed $path
     */
    function getFtpFile($filePath)
    {
        // 確保檔案存在
        if (Storage::disk('ftp')->exists($filePath)) {
            // 使用 Storage 的 readStream 方法打開檔案流
            $stream = Storage::disk('ftp')->readStream($filePath);

            if ($stream) {
                // 使用標準的 PHP 函數來逐行讀取檔案
                $result = [];
                while (!feof($stream)) {
                    $line = fgets($stream);
                    if ($line != 'EOF3')                  // 處理每一行的內容，例如輸出
                        $result[] = preg_split('/\s+/', $line);
                }

                // 關閉檔案流
                fclose($stream);
                return $result;
            }
        } else {
            return [];
        }
    }
}




if (!function_exists('getSameProductP2K')) {


    /**
     * getSameProductP2K
     *
     * @param  mixed $product
     */
    function getSameProductP2K($product)
    {
        if (empty($product)) return $product;

        $map = ProductMap::where('phantasia', $product->productNum)->first();
        if (empty($map)) return $product;
        else {

            return $map->productByKy;
        }
    }
}


if (!function_exists('getSameProductK2P')) {


    function getSameProductK2P($product)
    {
        if (empty($product)) return $product;
        $map = ProductMap::where('ky', $product->productNum)->first();
        if (empty($map)) return $product;
        else {

            return $map->productByPh;
        }
    }
}
