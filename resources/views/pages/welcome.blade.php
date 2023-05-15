@extends('app')

@section('content')

<img src="{{asset('img/drapeau-senegal.jpg')}}" alt="drapeau du senegal" width="200" class="rounded shadow-md h-32 mt-12">

      <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600 ">Hello from Dakar</h1>

      <p class="text-lg text-gray-800">It's currently {{date('h:i A') }}</p>

      
@endsection
