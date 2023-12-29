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
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = new Category();
        $category->name = $request->input('name');
        $category->save();

        return redirect('/categorylist')->with('success', 'Category created successfully');
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
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->name = $request->input('name');
        $category->save();

        return redirect('/categorylist')->with('success', 'Category Updated Successfully');
    }


    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect('/categorylist')->with('success', 'Category Deleted Successfully');
    }
}
