@extends('layout.layout')

@section('cssImport')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

{{--@section('scriptImport')
@endsection--}}

@section('content')
  <section class="sec">
      <h1 class="">DASHBOARD</h1>
          <a href="{{route('user')}}">User</a>
  </section>
@endsection
