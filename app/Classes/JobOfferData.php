<?php

namespace App\Classes;

class JobOfferData
{
    private $id;
    private $city;
    private $title;

    public function __construct($id, $city, $title)
    {
        $this->id = $id;
        $this->city = $city;
        $this->title = $title;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getTitle()
    {
        return $this->title;
    }
}