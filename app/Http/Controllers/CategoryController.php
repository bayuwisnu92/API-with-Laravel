<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        return response()->json($category);
    }

    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:3',
            'slug' => 'required|min:3|unique:categories'
        ]);
    
        $category = Category::create($validateData);
    
        return response()->json([
            'message' => 'Category created successfully',
            'category' => $category
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return response()->json($category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return response()->json($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
{
    $validateData = $request->validate([
        'name' => 'required|min:3',
        'slug' => 'required|min:3|unique:categories,slug,' . $category->id,
    ]);

    $category->update($validateData);

    return response()->json([
        'message' => 'Category updated successfully',
        'category' => $category
    ]);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json([
            'message' => 'Category deleted successfully'
        ]);
    }
}
