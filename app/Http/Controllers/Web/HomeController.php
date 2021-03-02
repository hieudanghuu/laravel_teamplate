<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Picture;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Session\SessionRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\Cart\CartRepository;
use Gloudemans\Shoppingcart\Facades\Cart;


class HomeController extends Controller
{
    protected $products;
    protected $productRepository;
    protected $sessionRepository;
    protected $cartRepository;


    public function  __construct(Product $products, ProductRepository $productRepository,SessionRepository $sessionRepository,CartRepository $cartRepository)
    {
        $this->products = $products;
        $this->productRepository = $productRepository;
        $this->sessionRepository = $sessionRepository;
        $this->cartRepository = $cartRepository;
    }

    public function index()
    {
        $product = $this->productRepository->webView();
        return view('webview.home',with([
            'mens' => $product['mens'],
            'womens' => $product['womens'],
            'hot_deal' => $product['hot_deal'],
            'selling_products_mens' => $product['selling_products_mens'],
            'selling_products_womens' => $product['selling_products_womens'],
            'product_sold' => $product['product_sold'],
        ]));
    }

    public function view($id)
    {
        return view('webview.view_product',with([
            'product' => $this->products->findOrFail($id),
            'sold' => $this->productRepository->getSold(),
        ]));
    }

    public function addCart(Request $request,$id)
    {
        $this->cartRepository->add($request,$id);
        return redirect()->route('web.cart.show',with(['carts' => Cart::content()]));
    }

    public function updateCart()
    {
        
    }

    public function showCart()
    {
        return view('webview.cart',with(['carts' => Cart::content(), 'sold' => $this->productRepository->getSold()]));
    }

    public function checkout(Request $request)
    {
        dd($request);
    }

    public function showWomens()
    {

    }

    public function showMens()
    {
        return view('web.show_mens');
    }

    public function delete($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
}
