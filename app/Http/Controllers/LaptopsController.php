<?php

namespace App\Http\Controllers;


use App\Models\Laptop;
use App\Models\Vendor;
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
        $laptops = laptop::all()->sortBy('vid');
        return view('laptops.index')->with(['laptops' => $laptops]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendors = vendor::all()->sortBy('id');
        return view('laptops.create')->with(['vendors' => $vendors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $vid = $request->input('vid');
        $graphics_card = $request->input('graphics_card');
        $size = $request->input('size');
        $cpu = $request->input('cpu');
        $price = $request->input('price');

        Laptop::create(
            [
                'name' => $name,
                'vid' => $vid,
                'graphics_card' => $graphics_card,
                'size' => $size,
                'cpu' => $cpu,
                'price' => $price,
            ]
        );
        return redirect('laptops');
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
        $vendors = Vendor::all()->sortBy('id');
        return view('laptops.edit')->with(['laptop' => $laptop, 'vendors' => $vendors]);
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
        $laptops = Laptop::findOrFail($id);
        $laptops->delete();
        return redirect('laptops');
    }

    public function highprice()
    {
        $laptops = Laptop::highprice()->get();
        return view('laptops.index', ['laptops' => $laptops]);
    }

    public function api_laptops()
    {
        return Laptop::all();
    }

    public function api_update(Request $request)
    {
        $laptop = Laptop::find($request->input('id'));
        if ($laptop == null) {
            return response()->json([
                'status' => 0,
            ]);
        }
        $laptop->name = $request->input('name');
        $laptop->vid = $request->input('vid');
        $laptop->graphics_card = $request->input('graphics_card');
        $laptop->size = $request->input('size');
        $laptop->cpu = $request->input('cpu');
        $laptop->price = $request->input('price');

        if ($laptop->save()) {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }
    }

    public function api_delete(Request $request)
    {
        $laptop = Laptop::find($request->input('id'));

        if ($laptop == null) {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($laptop->delete()) {
            return response()->json([
                'status' => 1,
            ]);
        }
    }
}
