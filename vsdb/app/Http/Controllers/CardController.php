<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    public function index()
    {
        $card = Card::where('name', 'Thanos')->first();

        return view('home', compact('card'));
    }
}
