<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Van;

class VanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vans = Van::all();
        //dd($vans);
        return view('vans.vans', compact('vans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('vans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'brand'=>'required',
            'model'=> 'required',
            'price'=> 'required|numeric',
        ]);
        Van::create($request->all());
        return redirect()->route('vans.index')->with('success'. 'Van added succesfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Van $van)
    {
        //
        return view ('vans.van', compact('van'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Van $van)
    {
        //
        return view ('vans.edit', compact('van') );
    }
    public function update(Request $request, Van $van)
    {
        $request->validate([
            'brand'=> 'required',
            'model' => 'required',
            'price'=> 'required|numeric',
        ]);
        $van->update($request->all());
        return redirect()->route('vans.index')->with('success', 'Van added sucessfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Van $van)
    {
        //
        $van->delete();
        return redirect()->route('vans.index')->with('success', 'Van deleted sucessfully.');
    }
}
