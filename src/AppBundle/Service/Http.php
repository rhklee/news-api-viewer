<?php

namespace AppBundle\Service;

class Http
{    
    public function performRequest($siteUrl, $contentType)
    {
         // From: http://php.net/curl_setopt
         // Note that "GET is the default"
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, $siteUrl);
         curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: '.$contentType));
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         return curl_exec($ch);
    }
}