<?php

namespace App\Helpers;

use DOMDocument;

class ContentHelper
{
    
    public static function processContent($content, $imagePath = '/img/knowledge-img/')
    {
        $dom = new DOMDocument('1.0', 'UTF-8');
        libxml_use_internal_errors(true);
        $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
        libxml_use_internal_errors(false);

        $images = $dom->getElementsByTagName('img');
        $bs64 = 'base64';

        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            if (strpos($data, $bs64) !== false) {
                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);

                // Check size of base64-encoded data
                $decodedData = base64_decode($data);
                if (strlen($decodedData) > 5 * 1024 * 1024) { // Skip if larger than 5MB
                    continue;
                }

                $image_name = $imagePath . time() . $k . '.png';
                $path = public_path() . $image_name;

                file_put_contents($path, $decodedData);

                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
        }

        return utf8_decode($dom->saveHTML());
    }
}
