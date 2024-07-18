@extends('layout.layout')

@section('content')
    <main>
        <h1 class="text-3xl font-bold">
            Home
        </h1>
        <a href="{{route('loginView')}}">Login</a>
    </main>
@endsection

