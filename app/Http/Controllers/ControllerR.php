<?php

namespace App\Http\Controllers;

use App\Models\modelProf;
use App\Models\User;
use Illuminate\Http\Request;

class ControllerR extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    
    {    
        $profs = modelProf::all();
        return view('prof.list', compact('profs'));
        
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prof.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:profs,email',
            'matiere' => 'required|string|max:255',
        ]);
    
        modelProf::create($request->all());
        
    
        return redirect('/profs')->with('success', 'Professeur ajouté avec succès.');
    }
    
    




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prof = modelProf::find($id);
        if ($prof){
            return view('show', compact('prof'));
        } else{
            return redirect()->route('afficher')->with('error', 'Data not found.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prof = modelProf::find($id);
        if ($prof) {
            return view('prof.edit', compact('prof'));
        } else {
            return redirect()->route('prof.list')->with('error', 'Data not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'telephone' => 'required|numeric',
            'adresse' => 'required',
            'date_naissance' => 'required|date',
        ]);

        $prof = modelProf::find($id);
        if ($prof) {
            $prof->update($request->all());
            return redirect()->route('afficher')->with('success', 'Data updated successfully.');
        } else {
            return redirect()->route('afficher')->with('error', 'Data not found.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prof = modelProf::find($id);
        $prof->delete();
        
        return redirect()->back()->with('success', 'Data deleted successfully.');
    }
}
