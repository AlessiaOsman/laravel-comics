@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <p>CURRENT SERIES</p>
    <ul class='row'>
        @foreach (config('comics') as $card)
            <li class='col'>
                <a>
                    <div>
                        <img src='{{$card['thumb']}}'/>
                        <h4>{{$card['title']}}</h4>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
    <button>LOAD MORE</button>
@endsection
