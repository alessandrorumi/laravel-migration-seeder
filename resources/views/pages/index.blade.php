@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Treni: {{ $trains->count() }}</h1>
    <ul>
        @foreach ($trains as $train)
            <li>Partenza: {{ $train->departure_time }}</li>
        @endforeach
    </ul>
@endsection
