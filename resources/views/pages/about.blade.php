@extends('app')

@section('title')
About Us | {{config('app.name')}}
@endsection

@section('content')

    <p>Build with &hearts; by <strong> LE JEUNE IMAM</strong></p>


    <a href="{{route('home')}}">Revenir à la page d'acceuil</a>

@endsection