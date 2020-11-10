@extends('layouts.master')

@section('container')

    <h2>Here's a list of all Star Wars characters:</h2>

    <div class="wrapper_cards">

        @foreach($data['results'] as $person)

            {{-- {{printf($person['name'])}} --}}
            <div class="card">
                <h3>{{ $person['name'] }}</h3>
                <p>Height: {{ $person['height'] }}</p>
                <p>Mass: {{ $person['mass'] }}</p>
                <p>Hair Color: {{ $person['hair_color'] }}</p>
                <p>Skin Color: {{ $person['skin_color'] }}</p>
                <p>Eye Color: {{ $person['eye_color'] }}</p>
                <p>Birth Year: {{ $person['birth_year'] }}</p>
                <p>Gender: {{ $person['gender'] }}</p>
            </div>

        @endforeach

    </div>
@endsection