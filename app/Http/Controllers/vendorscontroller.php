<?php

namespace App\Http\Controllers;


use App\Models\Laptop;
use App\Models\Vendor;
use Illuminate\Http\Request;

class vendorscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return Vendor::all()->toArray();
        $Vendors = vendor::all();
        return view('vendors.index')->with(['vendors' => $Vendors]);
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
        $vendor = Vendor::findorfail($id);
        return view('vendors.show')->with(['vendor' => $vendor]);
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
        $vendor = Vendor::findorfail($id);
        return view('vendors.edit')->with(['vendor' => $vendor]);
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
        $vendor = Vendor::findOrfail($id);
        $vendor->vendor = $request->input('vendor');
        $vendor->phone_number = $request->input('phone_number');
        $vendor->save();

        return redirect('vendors');
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
