<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    public function index()
    {
        $card = Card::where('title', 'spider-man')->first();
        $card->affiliation = str_replace('/', ' ● ', $card->affiliation);
        $flight = 0;
        $range = 0;
        if ($card->flight == 0) {
            $flight = 'visibility: hidden;';
        }
        if ($card->range == 0) {
            $range = 'visibility: hidden;';
        }

        if ($card->affiliation == "") {
            $affiliation = "margin-top: 370px";
        } else {
            $affiliation = '';
        }


        // return view('home', compact('card'));
        return view('new', compact('card', 'flight', 'range', 'affiliation'));
    }
}
