<?php

namespace App\Http\Controllers;

use App\Models\Category; // Ensure Category Model exists
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Retrieve all records from the categories table.
        $categories = Category::all();

        // Pass the data to the view using the compact helper.
        return view('categories.index')->with([
            'categories' => $categories
        ]);
    }

    // ✅ Move destroy() inside the class
    public function destroy($id)
    {
        $category = Category::findOrFail($id); // Find category by ID
        $category->delete(); // Delete category

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
    public function edit($id)
{
    $category = Category::findOrFail($id); // Find category by ID
    return view('categories.edit', compact('category')); // Pass category data to the view
}

}
