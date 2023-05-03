<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Owner;
use App\Models\Picture;
class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $Cars=Car::all();
        
        return view('owners.index')->with('cars',$Cars);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  
        return view('owners.createcar', ["Cars" => Owner::get() ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input1=$request->all();
        Car::create($input1);
        return redirect('owner')->with('flash_message','Car Addedd!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car=Car::find($id);
        return view('owners.show')->with('cars',$car);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::find($id);
        return view('owners.editcar')->with('cars',$car);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car=Car::find($id);
        $input=$request->all();
        $car->update($input);
        return redirect('owners.show')->with('flas_message','Ownner Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::destroy($id);
        return redirect('owners.show')->with('flash_message',"Owner deleted!");
    }
}
