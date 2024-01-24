<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
            ]);

            $existingCategory = Category::where('name', $request->input('name'))->first();
            if ($existingCategory) {
                return redirect()->back()->with('message', 'Category with this name already exists');
            }

            $category = new Category();
            $category->name = $request->input('name');
            $category->save();

            return redirect('/categorylist')->with('message', 'Category created successfully');
        } catch (\Exception $e) {
            return redirect('/categorylist')->with('message', 'Error creating category: ' . $e->getMessage());
        }
    }

    public function categorylist()
    {
        $categories = Category::select('id', 'name')->get();
        return view('admin.category.categoryList', compact('categories'));
    }

    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $category = Category::findOrFail($id);

            $request->validate([
                'name' => 'required|string|max:255',
            ]);

            $existingCategory = Category::where('name', $request->input('name'))->first();
            if ($existingCategory) {
                return redirect()->back()->with('message', 'Category with this name already exists');
            }

            $category->name = $request->input('name');
            $category->save();

            return redirect('/categorylist')->with('message', 'Category updated successfully');
        } catch (\Exception $e) {
            return redirect('/categorylist')->with('error', 'Error updating category: ' . $e->getMessage());
        }
    }

    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('/categorylist')->with('message', 'Category Deleted Successfully');
    }
}
