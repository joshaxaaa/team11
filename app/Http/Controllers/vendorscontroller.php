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
        return view('vendors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vendor = $request->input('vendor');
        $phone_number = $request->input('phone_number');

        Vendor::create(
            [
                'vendor' => $vendor,
                'phone_number' => $phone_number,
            ]
        );
        return redirect('vendors');
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
        $vendors = Vendor::findOrFail($id);
        $vendors->delete();
        return redirect('vendors');
    }

    public function api_vendors()
    {
        return Vendor::all();
    }

    public function api_update(Request $request)
    {
        $vendor = Vendor::find($request->input('id'));
        if ($vendor == null) {
            return response()->json([
                'status' => 0,
            ]);
        }

        $vendor->vendor = $request->input('vendor');
        $vendor->phone_number = $request->input('phone_number');
        if ($vendor->save()) {
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
        $vendor = Vendor::find($request->input('id'));

        if ($vendor == null) {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($vendor->delete()) {
            return response()->json([
                'status' => 1,
            ]);
        }

    }
}
