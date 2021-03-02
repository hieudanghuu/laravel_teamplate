<?php

namespace App\Repositories\Category;


use App\Models\Category;


class CategoryRepository 
{
    public  $categories;

    public function __construct()
    {
        $this->categories = new Category();
    }

    public function storeCategory($request)
    {
        $category = $this->categories->create([
            'name' => $request['name'],
        ]);
        $category->save();
    }

    public function updateCategory($request,$id)
    {
        $categories = $this->categories->findOrFail($id);
        $categories->name = $request['name'];
        $categories->update();
    }

    public function deleteCategory($id)
    {
        $categories = $this->categories->findOrFail($id);
        $categories->delete();
    }
}