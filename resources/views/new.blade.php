@extends('layouts.master')

    @section('content')

        <div class="card" style="background-image: url({{ Storage::url('new_character.png'); }});">
            <div class="title">
                <h1>{{ $card->title; }}</h1>
            </div>
            <div class="cost">
                <h2>{{ $card->cost; }}</h2>
            </div>
            <div class="version">
                <p>{{ $card->version; }}</p>
            </div>
            <div class="affiliation" style="{{ $affiliation; }}">
                <p>{{ $card->affiliation; }}</p>
            </div>
            <div class="power">
                <h5>{{ $card->power; }}</h5>
            </div>
            <div class="flight" class="flight" style="background-image: url({{ Storage::url('visible_flight.png'); }}); {{ $flight; }}">
            </div>
            <div class="range" class="range" style="background-image: url({{ Storage::url('visible_range.png'); }}); {{ $range; }}">
            </div>

            <div class="attack">
                <h3>{{ $card->attack; }}</h3>
            </div>
            <div class="defense">
                <h3>{{ $card->defense; }}</h3>
            </div>
        </div>
        
    @endsection

