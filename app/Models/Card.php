<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $table = 'cards';

    protected $guarded = [];

    public function format($card)
    {
        $card->affiliation = str_replace('/', ' ● ', $card->affiliation);
    }

    public function cardImage($card)
    {
        if ($card->type == "Plot Twist") {
            $card_image = 'plot_twist.png';
            $card->attack = '';
            $card->defense = '';
        } elseif ($card->type == 'Character') {
            $card_image = 'new_character.png';
        } elseif ($card->type == 'Location') {
            $card_image = 'new_location.png';
            $card->attack = '';
            $card->defense = '';
        }

        return $card_image;
    }
}
