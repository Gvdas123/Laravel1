<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Car;
class OwnersController extends Controller
{ 

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    { $filter=$request->session()->get('filterowner',(object)['Name'=>null,'Surname'=>null,'Phone_Number'=>null,'Age'=>null]);
        $owners=Owner::filter($filter)->get();
        return view('owners.index',['owners'=>$owners,'filter'=>$filter,'data'=>Owner::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('owners.create', ["owner" => Owner::get() ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        Owner::create($input);
        return redirect('owner')->with('flash_message','Owner Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
        $owner=Owner::find($id);
        return view('owners.show')->with('owner',$owner);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
     $owner = Owner::find($id);
     
     $this->authorize('update', $owner);
     
    return view('owners.edit')->with('owners',$owner);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $owner=Owner::find($id);
         if (! $request->user()->can('update',$owner)){
            return redirect()->route("owners.index");
         }
        $input=$request->all();
        $owner->update($input);
        return redirect('owner')->with('flas_message','Owner Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request){ 
        if (! $request->user()->can('delete',Owner::find($id))){
        return redirect()->route("owners.index");
     }
        Owner::destroy($id);
        return redirect('owner')->with('flash_message',"Owner deleted!");
    }
    public function search(Request $request)
    {
        $filterowner=new \stdClass();
        $filterowner->Name=$request->Name;
        $filterowner->Surname=$request->Surname;
        $filterowner->Phone_Number=$request->Phone_Number;
        $filterowner->Age=$request->Age;
        $request->session()->put('filterowner',$filterowner);
        return redirect()->back();
    }


}
