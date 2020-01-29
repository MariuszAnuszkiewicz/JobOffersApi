<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ApiJobOfferController extends Controller
{
    public function offersAll()
    {
        $clientJobOffer = App::make('ClientJobOffer');
        $clientJobOffer->getJobOfferAll();
    }

    public function offersById($id)
    {
        $clientJobOffer = App::make('ClientJobOffer');
        $clientJobOffer->getJobOfferById($id);
    }
}
