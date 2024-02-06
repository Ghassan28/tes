<?php

namespace App\Http\Controllers;

use App\Models\register;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registers = Register::all();

        if ($registers) {
            return response()->json([
                "message" => "List of registers",
                "registers" => $registers,
            ], 200);
        } else {
            return response()->json([
                "message" => "Error",
            ], 422);
        }
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
        $validation = Validator::make($request->all(), [
            'No_KTP' => 'required',
            'name' => 'required',
            'Date_of_Birth' => 'required',
            'Phone' => 'required',
            'description' => 'required',
        ]);

        if($validation->fails()) {
            return response()->json([
                "message" => $validation->errors()
            ], 422);
        }

        $rent_controllers = register::create($request->all());
        if($rent_controllers){
            return response()->json([
                "message" => "Create Rent Succes"
            ], 200);
        }
        }


    /**
     * Display the specified resource.
     */
    public function show(register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(register $register)
    {
        //
    }
}
