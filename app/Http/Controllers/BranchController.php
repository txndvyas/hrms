<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = Branch::all();

        if($branches)
        {
            return response()->json([
                'status' => 'Success',
                'message' => 'Branch data load successfully',
                'data' => $branches
            ], 200);
        }
        return response()->json([
            'status' => 'Failed',
            'message' => 'Failed to load Branch'
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
            'code' => 'required'
        ]);
        $uuid = Str::uuid()->toString();
        $branch = new branch();
        $branch->uuid = $uuid;
        $branch->parent_id = $request->parent_id;
        $branch->name = $request->name;
        $branch->status = $request->status;
        $branch->description = $request->description;
        $branch->code = $request->code;
        $branch->save();

        if($branch)
        {
            return response()->json([
                'status' => 'Success',
                'message' => 'Branch created successfully',
            ], 200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create branch',
            ], 401);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        $branch = Branch::where('uuid', $uuid)->first();

        if($branch)
        {
            return response()->json([
                'status' => 'Success',
                'message' => 'Branch Fetched successfully',
                'data' => $branch
            ], 200);
        }
        return response()->json([
            'status' => 'Failed',
            'message' => 'Branch not found',
        ], 401);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch)
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

        $branch = Branch::where('uuid', $uuid)->first();
        $branch->name = $request->name;
        $branch->status = $request->status;
        $branch->parent_id = $request->parent_id;
        $branch->description = $request->description;
        $branch->save();

        if($branch)
        {
            return response()->json([
                'status' => 'Success',
                'message' => 'Branch Updated Succesfully',
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => 'Success',
                'message' => 'Failed to update Branch',
            ], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $branch = Branch::where('uuid', $uuid)->first();

        if ($branch)
        {
            $branch->delete();
            return response()->json([
                'status' => 'Success',
                'message' => 'Branch deleted successfully'
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => 'Failed',
                'message' => 'Failed to delete branch',
            ], 401);
        }
    }
}
