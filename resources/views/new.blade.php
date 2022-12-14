@extends('layouts.master')

    @section('content')

        <div class="search">
            <form action="/search" method="post" autocomplete="off">
                @csrf
                <input type="text" name="title" class="search-box" placeholder="title">
                <input type="text" name="version" class="search-box" placeholder="version">
                {{-- <input type="text" name="affiliation" class="search-box" placeholder="affiliation"> --}}
                <input type="submit" hidden='true'>
            </form>
        </div>

        <div class="card" style="background-image: url({{ Storage::url("$card_image"); }});">
            <div class="title">
                <h1>{{ $card->title; }}</h1>
            </div>
            <div class="cost">
                <h2>{{ $card->cost; }}</h2>
            </div>
            <div class="version">
                <p>{{ $card->version; }}</p>
            </div>
            <div class="affiliation">
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

