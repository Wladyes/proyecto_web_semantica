@extends('layouts.app')

@section('title', 'Perfil de ' . $medico->name)

@section('content')
    <h2>Perfil del Médico</h2>
    
    <div style="background: #fff; padding: 20px; border: 1px solid #ddd; border-radius: 5px;">
        <p><strong>Nombre:</strong> {{ $medico->name }}</p>
        <p><strong>Email:</strong> {{ $medico->email }}</p>
        <p><strong>Especialidad:</strong> {{ $medico->especialidad }}</p>
        <p><strong>Teléfono:</strong> {{ $medico->telefono }}</p>
        <p><strong>Afiliación:</strong> {{ $medico->afiliacion }}</p>
        <p><strong>Nombre Afiliación:</strong> {{ $medico->nombre_afiliacion }}</p>
    </div>

    {{-- JSON-LD para Web Semántica --}}   
         
   
    <script type="application/ld+json">
 {!! json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    
    <br>
    <a href="{{ route('medicos.index') }}">Volver al listado</a>
@endsection
