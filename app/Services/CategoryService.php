<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function store(array $data): void
    {
        $category = new Category();
        $category->name =  $data['name'];
        $category->type =  $data['type'];
        $category->save();
    }

    public function update(Category $category, array $data): void
    {
        $category->update($data);
    }

    public function destroy(Category $category): void
    {
        $category->delete();
    }
}
