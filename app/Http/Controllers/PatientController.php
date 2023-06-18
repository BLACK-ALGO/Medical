<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Consultation;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::with('consultations')->latest()->paginate(50);

        return view('patient.index',compact('patients'))
        ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {



        $patients = Patient::all();
        $consultations = Consultation::all();
        return view('patient.create',compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(StorePatientRequest $request)
    {
        Patient::create($request->all());
        return redirect()->route('patient.index')
                        ->with('Patient Was Added Succesfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return view('patient.show',compact('patient'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        return view('patient.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        $patient->update($request->all());
        return redirect()->route('patient.index')
                        ->with('success','Patien was Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {

        $patient->delete();

        return redirect()->route('patient.index')
                        ->with('Successfully Remove.');
        //
    }
}
