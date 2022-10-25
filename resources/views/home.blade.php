@extends('layouts.master')
    @section('content')

        <div class="card">
            <div class="header">
                <div class="header-top">
                    <h1>{{ $card->title }}</h1>
                    {{-- <h5>{{ $card->publisher }}</h5> --}}
                </div>
                <div class="header-bottom">
                    <h5>{{ $card->version }}</h5>
                </div>
            </div>
            <div class="image">
            </div>
            <div class="power">
                <p>{{ $card->power }}</p>
            </div>
            <div class="sidebar">
                <div class="rank">
                    <h1>{{ $card->cost }}</h1>
                </div>
                <div class="affiliation">
                    <h3>{{ $card->affiliation }}</h3>
                </div>
                <div class="stats">
                    <h1>{{ $card->attack }}</h1>
                    <h1>{{ $card->defense }}
                </div>
            </div>
        </div>

    @endsection

