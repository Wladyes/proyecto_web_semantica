@extends('layouts.app')

@section('title', 'Listado de Médicos')

@section('content')
    <h2>Listado de Médicos</h2>
    
    <ul>
        @foreach($medicos as $medico)
            <li>
                <strong>{{ $medico->name }}</strong> - {{ $medico->email }}
                <br>
                <small>Especialidad: {{ $medico->especialidad }}</small>
                <br>
                <a href="{{ route('medicos.show', $medico->id) }}">Ver perfil semántico</a>
            </li>
        @endforeach
    </ul>
@endsection
