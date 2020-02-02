<?php

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;


class ApiClient
{
    private $url = 'https://jsonplaceholder.typicode.com';
    private $client;
    private $method;
    public function __construct($method)
    {
        $this->method = $method;
        $this->client = new Client();
    }

    public function send(String $text)
    {
        $response = $this->client->request($this->method, $this->url . '/posts',
            [
                'body' => json_encode(['title' => 'test text ','body' => $text])
            ]
        );
        return json_decode($response->getBody()->getContents());
        
    }
}