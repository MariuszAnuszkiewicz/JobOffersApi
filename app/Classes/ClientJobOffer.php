<?php

namespace App\Classes;

class ClientJobOffer
{
    private $jobOffer;

    public function __construct(JobOffer $jobOffer)
    {
        $this->jobOffer = $jobOffer->initData();
    }

    public function getJobOfferAll()
    {
        foreach ($this->jobOffer as $in) {
            var_dump($in->getId());
            var_dump($in->getTitle());
            var_dump($in->getCity());
        }
    }

    public function getJobOfferById($id)
    {
        foreach ($this->jobOffer as $index => $in) {
            if ($index == $id) {
                var_dump($in->getId());
                var_dump($in->getTitle());
                var_dump($in->getCity());
            }
        }
    }
}