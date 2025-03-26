@extends('client/profile')
@section('title', 'Mi cuenta - Supellex')
@section('profile')
    <h1>Hola usuario!</h1>
    <h2>{{ auth()->user()->name }}</h2>
@endsection 