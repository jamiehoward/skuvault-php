<?php

namespace SkuVault\Endpoints;

class Endpoint
{
    public $data;
    public $method = 'POST';
    public $uri;

    const BASE_URL = 'https://app.skuvault.com/api/';

    public function call()
    {
        $dataString = json_encode($this->data);

        $url = self::BASE_URL . $this->uri;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $this->method);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            [
                'Content-Type: application/json',
                'Accept: application/json',
                'Content-Length: ' . strlen($dataString),
            ]
        );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        return $result;
    }
}
