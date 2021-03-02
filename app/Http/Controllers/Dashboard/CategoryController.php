<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use App\Repositories\Category\CategoryRepository;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    protected $categories;
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->categories = new Category();
    }

    public function list()
    {
        return view('dashboards.categories.list',with(['categories' => $this->categories->paginate(15)]));
    }

    public function create()
    {
        return view('dashboards.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $this->categoryRepository->storeCategory($request);
        Session::flash('success', 'create success');
        return redirect()->route('dashboard.category.list');

    }

    public function edit($id)
    {
        return view('dashboards.categories.edit',with(['category'=>$this->categories->findOrFail($id)]));
    }

    public function update(CategoryRequest $request,$id)
    {
        $this->categoryRepository->updateCategory($request,$id);
        Session::flash('success', 'update success');
        return redirect()->route('dashboard.category.list');
    }

    public function delete($id)
    {
        $this->categoryRepository->deleteCategory($id);
        Session::flash('success', 'delete success');
        return redirect()->route('dashboard.category.list');
    }
}
