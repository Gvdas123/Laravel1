<?php

namespace App\Http\Controllers;
use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Owner::all();

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
        $owner=new Owner();
        $owner->Name=$request->Name;
        $owner->Surname=$request->Surname;
        $owner->Phone_Number=$request->Phone_Number;
        $owner->Age=$request->Age;
        $owner->save();

        return $owner;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Owner::find($id);
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { 
        $owner= Owner::find($id);
        $owner->Name=$request->Name;
        $owner->Surname=$request->Surname;
        $owner->Phone_Number=$request->Phone_Number;
        $owner->Age=$request->Age;
        $owner->save();

        return $owner;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Owner::destroy($id);
        return true;
    }
}
