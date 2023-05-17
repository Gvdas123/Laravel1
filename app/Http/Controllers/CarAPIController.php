<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class CarAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Car::all();
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
        $car=new Car();
        $car->Brand=$request->Brand;
        $car->Model=$request->Model;
        $car->Registration_Number=$request->Registration_Number;
        $car->Owners_id=$request->Owners_id;
        $car->save();
        return $car;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Car::find($id);
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
        $car= Car::find($id);
        $car->Brand=$request->Brand;
        $car->Model=$request->Model;
        $car->Registration_Number=$request->Registration_Number;
        $car->Owners_id=$request->Owners_id;
        $car->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::destroy($id);
        return true;
    }
}
