<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $designations = Designation::all();

        if($designations)
        {
            return response()->json([
                'status' => 'Success',
                'message' => 'Designation Loads Successfully',
                'data' => $designations
            ], 200);
        }

        return response()->json([
            'status' => 'Failed',
            'message' => 'Could Not fetch Designations',
        ], 401);
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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'parent_id' => 'nullable|exists:designations,id'
        ]);
        $uuid = Str::uuid()->toString();

        $designation = new Designation();
        $designation->uuid = $uuid;
        $designation->name = $request->name;
        $designation->status = $request->status;
        $designation->parent_id = $request->parent_id;
        $designation->description = $request->description;
        $designation->save();

        if($designation)
        {
            return response()->json([
                'status' => 'Success',
                'message' => 'Designation created successfully',
                'data' => $designation
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => 'Failed',
                'message' => 'Failed to create Designation',
            ], 401);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        $designation = Designation::where('uuid', $uuid)->first();

        if ($designation) {
            return response()->json([
                'status' => 'Success',
                'message' => 'Designation found',
                'data' => $designation
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => 'Success',
                'message' => 'Designation not found'
            ], 401);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Designation $designation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $uuid)
    {
        $designation = Designation::where('uuid', $uuid)->first();

        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $designation->name = $request->name;
        $designation->status = $request->status;
        $designation->parent_id = $request->parent_id;
        $designation->description = $request->description;
        $designation->save();

        if($designation)
        {
            return response()->json([
                'status' => 'Success',
                'message' => 'Designation updated successfully',
                'data' => $designation
            ], 200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Designation updated successfully',
            ], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $designation = Designation::where('uuid', $uuid)->first();

        if ($designation) {

            $designation->delete();

            return response()->json([
                'status' => 'Success',
                'message' => 'Designation deleted successfully'
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => 'Failed',
                'message' => 'Designation not found'
            ]);
        }
    }
}
