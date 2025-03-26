@extends('layout/main')
@section('content')
    <h1>Hola administrador</h1>   
    {{ auth()->user() }} 
@endsection