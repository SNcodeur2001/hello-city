@extends('app')

@section('content')

<img src="{{asset('img/drapeau-senegal.jpg')}}" alt="drapeau du senegal" width="200">

      <h1>Hello from Dakar</h1>

      <p>It's currently {{date('h:i A') }}</p>

      
@endsection
