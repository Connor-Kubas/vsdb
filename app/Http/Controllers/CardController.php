<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    public function index()
    {
        $card = Card::where('id', 1)->first();

        // return view('home', compact('card'));
        return view('new', compact('card'));
    }
}
