<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    public function index()
    {
        $card = Card::where('title', 'batman')->first();

        $card->format($card);

        $flight = 0;
        $range = 0;
        if ($card->flight == 0) {
            $flight = 'visibility: hidden;';
        }
        if ($card->range == 0) {
            $range = 'visibility: hidden;';
        }

        $card_image = $card->cardImage($card);

        return view('new', compact('card', 'flight', 'range', 'card_image'));
    }

    public function search(Request $request)
    {
        $card = Card::where('title', 'like', $request->title)->where('version', 'like', $request->version ?? '')->first();
        
        if (!$card) {
            $card = Card::where('title', 'like', $request->title)->first();
        }

        $card->format($card);

        $flight = 0;
        $range = 0;
        if ($card->flight == 0) {
            $flight = 'visibility: hidden;';
        }
        if ($card->range == 0) {
            $range = 'visibility: hidden;';
        }

        $card_image = $card->cardImage($card);

        return view('new', compact('card', 'flight', 'range', 'card_image'));
    }
}
