<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicos = User::where('role', 'medico')->get();
        return view('medicos.index', compact('medicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $medico = User::findOrFail($id);
         // Mapeo de especialidades a términos de schema.org
         $especialidadesMap = [
        'Cardiología' => 'http://schema.org/Cardiovascular',
        'Pediatría' => 'http://schema.org/Pediatric',
        'Dermatología' => 'http://schema.org/Dermatology',
        'Neurología' => 'http://schema.org/Neurologic',
        'Traumatología' => 'http://schema.org/Orthopedic',
        'Oncología' => 'http://schema.org/Oncologic',
        'Ginecología' => 'http://schema.org/Gynecologic',
        'Oftalmología' => 'http://schema.org/Surgical',
        // Agrega más mapeos según sea necesario
        ];
        
        // Obtener el término válido o usar un valor por defecto
        $especialidadValida = $especialidadesMap[$medico->especialidad] ?? 'http://schema.org/Physician';

        // Construcción del JSON-LD
        $jsonLd = [
            "@context" => "https://schema.org",
            "@type" => "Physician",
            "name" => $medico->name,
            "email" => $medico->email,            
            "telephone" => $medico->telefono,
            "medicalSpecialty" =>  $especialidadValida, // Puedes mapear esto a términos de schema.org si es necesario
            "hospitalAffiliation" => [ // Organización afiliada 
                "@type" => "Hospital",
                "name" => $medico->nombre_afiliacion,
            ],
        ];

        return view('medicos.show', compact('medico', 'jsonLd'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
