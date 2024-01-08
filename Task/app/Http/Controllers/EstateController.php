<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Estate;
use Illuminate\Http\Request;

class EstateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return view('components.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $outlook = Estate::get();
     return view('components.create',compact('outlook'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    $es=new  Estate();   //
$es->outlook=$request['School'];  
$es->outlook=$request['Inner'];  
$es->outlook=$request['mosque'];  
$es->outlook=$request['publicRoad'];  

$es->save();


}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function returnImages(string $id)
    {
        $estate = Estate::find($id)->images;
    }
}
