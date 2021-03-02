<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Picture;
use App\Http\Requests\ProductRequest;
use App\Repositories\Product\ProductRepository;
use Illuminate\Support\Facades\Session;
class ProductController extends Controller
{
    protected $products;
    protected $productRepository;
    protected $categories;
    protected $images;

    public function __construct(ProductRepository $productRepository)
    {
        $this->products = new Product();
        $this->productRepository = $productRepository;
        $this->categories = new Category();
        $this->images = new Picture();
    }

    public function list()
    {
        return view('dashboards.products.list',with(['products' => $this->products->paginate(5)]));
    }

    public function create()
    {
        return view('dashboards.products.create',with(['categories'=>$this->categories->all()]));
    }

    public function store(ProductRequest $request)
    {
        $this->productRepository->createProduct($request);
        Session::flash('success', 'create success');
        return redirect()->route('dashboard.product.list');
    }

    public function edit($id)
    {
        return view('dashboards.products.edit',
            with([
                    'product' => $this->products->findOrFail($id),
                    'categories' => $this->categories->all(),
                ])
        );
    }

    public function update(ProductRequest $request,$id)
    {
        $this->productRepository->updateProduct($request,$id);
        Session::flash('success', 'update success');
        return redirect()->route('dashboard.product.list');
    }

    public function delete($id)
    {
        $this->productRepository->deleteProduct($id);
        Session::flash('success', 'delete success');
        return redirect()->route('dashboard.product.list');
    }

    public function view($id)
    {
        return view('dashboards.products.view',
            with([
                    'product' => $this->products->findOrFail($id),
                    'categories' => $this->categories->all(),
                ])
        );
    }

    public function search(Request $request)
    {
        $result = $this->productRepository->search($request);
        // dd($result['product']->paginate(5));
        return view('dashboards.products.list',with(['products' => $result['product'],'search' => $result['key']]));
    }

    public function image($id)
    {
        return view('dashboards.products.edit_image',with(['product' => $this->products->findOrFail($id)]));
    }

    public function imageUpdate(Request $request,$id)
    {
        $this->productRepository->upImage($request,$id);
        Session::flash('success', 'update success');
        return redirect()->back();
    }
    public function imageDelete(Request $request)
    {
        // dd($request);
        $this->productRepository->imageDelete($request);
        Session::flash('success', 'delete success');
        return redirect()->route('dashboard.product.image',$request->product_id);
    }

    public function imageCreate($id_product)
    {
        return view('dashboards.products.create_image',with(['product' => $this->products->findOrFail($id_product)]));
    }

    public function imageStore(Request $request)
    {
        $this->productRepository->imageStore($request);
        Session::flash('success', 'create success');
        return redirect()->route('dashboard.product.image',$request['id_product']);
    }
}
