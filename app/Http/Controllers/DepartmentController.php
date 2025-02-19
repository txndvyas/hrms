<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();

        if($departments)
        {
            return response()->json([
                'status' => 'Success',
                'data' => $departments,
                'message' => 'Department Load Successfully'
            ], 200);
        }
        return response()->json([
            'status' => 'Failed',
            'message' => 'Failed to load Department'
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
        ]);
        $uuid = Str::uuid()->toString();

        $department = new Department();
        $department->uuid = $uuid;
        $department->name = $request->name;
        $department->status = $request->status;
        $department->description = $request->description;
        $department->save();

        if($department)
        {
            return response()->json([
                'status' => 'Success',
                'message' => 'Department created successfully',
                'data' => $department
            ], 200);
        }

        return response()->json([
            'status' => 'Failed',
            'message' => 'Failed to create Department',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        $department = Department::where('uuid', $uuid)->first();

        if($department)
        {
            return response()->json([
                'status' => 'Success',
                'message' => 'Load Department Successfully',
                'data' => $department
            ], 200);
        }

        return response()->json([
            'status' => 'Failed',
            'message' => 'Failed to create Department',
        ], 401);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $uuid)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $department = Department::where('uuid', $uuid)->first();
        $department->name = $request->name;
        $department->status = $request->status;
        $department->description = $request->description;
        $department->save();

        if($department)
        {
            return response()->json([
                'status' => 'Success',
                'message' => 'Department updated successfully',
                'data' => $department
            ], 202);
        }
        else
        {
            return response()->json([
                'status' => 'Failed',
                'message' => 'Failed to update Department',
            ], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $department = Department::where('uuid', $uuid)->first();

        if ($department) {
            $department->delete();
            return response()->json([
                'status' => 'Success',
                'message' => 'Department deleted successfully'
            ], 200);
        } else {
            return response()->json([
                'status' => 'Failed',
                'message' => 'Department not found'
            ], 401);
        }
    }
}
