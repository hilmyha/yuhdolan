@extends('dashboard.components.dashboard')

@section('container')
  <h1>Welcome, {{ auth()->user()->name }}</h1>
@endsection