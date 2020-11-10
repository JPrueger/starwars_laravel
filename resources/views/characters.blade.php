@extends('layouts.master')

@section('container')

    @foreach($data['results'] as $person)

        {{-- {{printf($person['name'])}} --}}

        <h2>{{ $person['name'] }}</h2>
        <p>Height: {{ $person['height'] }}</p>
        <p>Mass: {{ $person['mass'] }}</p>
        <p>Hair Color: {{ $person['hair_color'] }}</p>
        <p>Skin Color: {{ $person['skin_color'] }}</p>
        <p>Eye Color: {{ $person['eye_color'] }}</p>
        <p>Birth Year: {{ $person['birth_year'] }}</p>
        <p>Gender: {{ $person['gender'] }}</p>


    @endforeach

@endsection