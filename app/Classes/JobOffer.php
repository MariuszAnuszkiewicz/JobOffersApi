<?php

namespace App\Classes;

use GuzzleHttp\Client;

class JobOffer
{
    const ENDPOINT = '/api/v1/ads?_format=json';
    private $client;
    private $collection;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function all()
    {
        return $this->endpointRequest(self::ENDPOINT);
    }

    public function initData()
    {
        $func = function($value) {
            return $value;
        };

        $data = array_map($func, (array) $this->all());
        foreach ($data['data'] as $property) {
            foreach ($property->cities as $city) {
                $this->collection[$property->id] = new JobOfferData($property->id, $city, $property->content->title);
            }
        }
        return $this->collection;
    }

    public function endpointRequest($url)
    {
        try {
            $response = $this->client->request('GET', $url);
        } catch (\Exception $e) {
            return [];
        }
        return $this->response_handler($response->getBody()->getContents());
    }

    public function response_handler($response)
    {
        if ($response) {
            return json_decode($response);
        }
        return [];
    }

    public function getCollection()
    {
        return $this->collection;
    }
}