<?php

namespace App\Http\Controllers;


use App\Models\Laptop;
use Database\Seeders\LaptopsTableSeeder;
use Illuminate\Http\Request;

class laptopscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$laptops=Laptop::all()->toArray();
        $laptops = laptop::all();
        return view('laptops.index')->with(['laptops' => $laptops]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $laptop = Laptop::findOrFail($id);
        return view('laptops.show')->with(['laptop' => $laptop]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $laptop = Laptop::findOrFail($id);
        return view('laptops.edit')->with(['laptop' => $laptop]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $laptop = Laptop::findOrfail($id);
        $laptop->name = $request->input('name');
        $laptop->vid = $request->input('vid');
        $laptop->graphics_card = $request->input('graphics_card');
        $laptop->size = $request->input('size');
        $laptop->cpu = $request->input('cpu');
        $laptop->price = $request->input('price');

        $laptop->save();

        return redirect('laptops');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
