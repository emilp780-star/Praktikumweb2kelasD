<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       $category = Category::all();

        return response()->json([
            'status' => "SUKsaesss",
            'data' => CategoryResource::collection($category),
            'message' => "berhasil ambill semua data",
        ]);//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = Category::create($request->validated());
        return response()->json([
            'status' => "SUKsaesss 201",
            'data' => new CategoryResource($category),
            'message' => "berhasil tambah 1 data",

        ]);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
