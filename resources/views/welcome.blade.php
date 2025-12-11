@extends('layouts.app')

@section('content')
    <h2>Inicio</h2>
    <p>Sistema de gestión de citas médicas con Web Semántica</p>
    <a href="{{ route('medicos.index') }}">Ver listado de médicos</a>
@endsection
