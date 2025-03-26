@extends('layout/main')
@section('content')
    <h1>Hola empleado</h1>
    {{ auth()->user() }}
@endsection