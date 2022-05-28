<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eleve;

class eleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eleves = eleve::all();
    return view('eleves.index', compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
            return view('eleves.create');
           
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',

            ]);
            //dd($request);
            
            $eleve = new eleve;
            $eleve->first_name = $request->first_name;
            $eleve->last_name = $request->last_name;
            $eleve->email = $request->email;
            $eleve->filliere = $request->filliere;
            $eleve->ville = $request->ville;
            $eleve->photo = $request->photo;
            $eleve->save();
            return redirect('/eleves')->with('success', 'Eleve saved!');
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eleve = eleve::find($id);
     return view('eleves.edit', compact('eleve')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
           
            ]);
            $eleve = eleve::find($id);
            $eleve->first_name = $request->get('first_name');
            $eleve->last_name = $request->get('last_name');
            $eleve->email = $request->get('email');
            $eleve->filliere = $request->get('filliere');
            $eleve->ville = $request->get('ville');
            $eleve->photo = $request->get('photo');
            $eleve->save();
            return redirect('/eleves')->with('success', 'Eleve updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $eleve = eleve::find($id);
        $eleve->delete();
 return redirect('/eleves')->with('success', 'Eleve deleted!');
    }
}
