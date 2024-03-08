@extends('layouts.main')

@section('cdns')
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
@endsection

@section('main-content')
    <div id='main-comic-card-content'>
    <div class='section-blue'>
        <img src='{{$comic['thumb']}}'/>
    </div>
        <div class='container'>
            <div class='comic-card'>
        <div class='left'>
            <h1 class='card-title'>{{ $comic['title'] }}</h1>
            <div class='card-header'>
                <div class='card-header-left'>
                    <h5 class='price'>U.S. Price: <span>{{$comic['price']}}</span></h5>
                    <h5>AVAILABLE</h5>
                </div>
                <div class='card-header-right'>
                    <h5>Check Availability</h5>
                </div>
            </div>
            <p class='card-description'>{{$comic['description']}}</p>

        </div>

        <div class='right'>
            <h4>ADVERTISEMENT</h4>
            <img src='{{Vite::asset('resources/img/adv.jpg')}}'/>
        </div>

    </div>
        </div>
    </div>

    
@endsection
