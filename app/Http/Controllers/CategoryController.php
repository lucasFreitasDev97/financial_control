<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        return view('category.index');
    }

    public function form(Category $category = null): View
    {
        if ($category) {
            $category = Category::find($category);
        }

        return view('category.form', ['category' => $category]);
    }

    public function store(): RedirectResponse
    {
        return redirect()->route('category.index');
    }

    public function update(): RedirectResponse
    {
        return redirect()->route('category.index');
    }

    public function destroy(): RedirectResponse
    {
        return redirect()->route('category.index');
    }
}
