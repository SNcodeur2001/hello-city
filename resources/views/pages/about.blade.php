@extends('app')

@section('title')
About Us | {{config('app.name')}}
@endsection

@section('content')
<img src="/img/design.jpg" alt="drapeau du senegal" width="200">
    <p>Build with &hearts; by <strong> LE JEUNE IMAM</strong></p>


    <a href="{{route('home')}}">Revenir à la page d'acceuil</a>

@endsection