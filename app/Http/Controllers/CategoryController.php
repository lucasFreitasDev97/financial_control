<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function __construct(protected CategoryService $categoryService){}
    public function index(): View
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function form(Category $category = null): View
    {
        if ($category) {
            $category = Category::find($category)->first();
        }

        return view('category.form', ['category' => $category]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        $this->categoryService->store($data);
        return redirect()->route('categories.index');
    }

    public function update(Request $request, Category $category): RedirectResponse
    {
        $data = $request->all();
        $this->categoryService->update($category, $data);
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category): RedirectResponse
    {
        $this->categoryService->destroy($category);
        return redirect()->route('categories.index');
    }
}
