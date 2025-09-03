<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Patient;


class PatientController extends Controller
{   

    //displaying and search
    public function index(Request $request)
    {
        $search = $request->query('search');

        $patients = Patient::when($search, function($query, $search) {
            return $query->where('first_name', 'like', "%{$search}%")
                         ->orWhere('last_name', 'like', "%{$search}%")
                         ->orWhere('email', 'like', "%{$search}%");
        })->get();

        return view('index', compact('patients', 'search'));
    }

    //adding new patient
     public function create()
    {
        return view('create');
    }

    //storing patient data using post method
     public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'gender'     => 'required|in:male,female',
            'birth_date' => 'nullable|date',
            'phone'      => 'nullable|string|max:20',
            'email'      => 'nullable|email|unique:patients,email',
            'address'    => 'nullable|string|max:255',
            'blood_type' => 'nullable|string|max:5',
        ]);

        Patient::create($validated);

        return redirect()->route('index')
                         ->with('success', 'Patient added successfully!');
    }

    //show payient by id
    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return view('show', compact('patient'));
    }

}
