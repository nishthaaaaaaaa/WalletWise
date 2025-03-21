<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'income_name' => 'required|string|max:255',
            'income_type' => 'required|in:income,expense',
        ]);

        Category::create([
            'name' => $request->income_name,
            'type' => $request->income_type,
        ]);

        return redirect()->back()->with('success', 'Category added successfully!');
    }

    public function index()
    {
        $categories = Category::all();
        // dd($categories);
        return view('admin.showCategory', compact('categories'));
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully!');
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.editCategory', compact('category')); // Return edit form view
    }
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:income,expense', // Ensure the type is either "income" or "expense"
        ]);
    
        $category->update([
            'name' => $request->input('name'),
            'type' => $request->input('type'), // Updating the type as well
        ]);

        return redirect()->route('admin.categories')->with('success', 'Category updated successfully!');
    }
}
