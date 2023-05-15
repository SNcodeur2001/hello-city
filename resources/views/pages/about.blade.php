@extends('app', ['title' => 'About Us'])

@section('title')
About Us | {{config('app.name')}}
@endsection

@section('content')
<img src="{{asset('img/design.jpg')}}" width="200" class="my-12 rounded-full shadow-md">
    <h2 class="mb-5 text-gray-700">
        Build with <span class="text-pink-500">&hearts;</span>  by  SN CODEUR
    </h2>

    <p>
        <a href="{{route('home')}}" class="text-indigo-500 hover:text-indigo-900 underline">Revenir à la page d'acceuil</a>
    </p>
    

@endsection