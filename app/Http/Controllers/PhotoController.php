<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Picture;
class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Img=Picture::all();
        
        return view('owners.index')->with('img',$Img);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('owners.createimg', ["Img" => Car::get() ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input1=$request->all();
        if ($request->hasFile('image')){
            $input2 = $request->file('image');
            foreach( $input2 as $item){

                $filename = $item->store('public/img');
                
                Picture::create(['image'=>$filename,'Cars_id'=>$input1['Cars_id']]);
        }
        }
        
        return redirect('owner');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $img=Picture::find($id);
        return view('owners.show')->with('img',$img);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
