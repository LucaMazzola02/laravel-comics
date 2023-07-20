@extends('layouts.app')

@section('title', 'Welcome')

@section('jumbo-content')
<div class="jumbotron-top"></div>

<div class="jumbotron-bottom">
    <div class="container">
        <div class="series-cards">
            @foreach ( $cards as $card)
            <div class="card">
                <div class="card-image">
                    <img src= "{{ $card['thumb'] }}" alt="series-image"> 
                </div>
                <div class="title">
                    {{ $card['series'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection