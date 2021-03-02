<?php

namespace App\Repositories\Session;


use App\Models\Product;
use App\Models\Category;
use App\Models\Picture;
use Illuminate\Support\Facades\Session;



class SessionRepository 
{
    protected  $products;
    protected  $categories;
    protected  $images;

    public function __construct()
    {
        $this->products = new Product();
        $this->categories = new Category();
        $this->images = new Picture();
    }

    public function add($request,$id)
    {
        $product = $this->products->findOrFail($id);
        $cart[$id] = [
            'id' => $id,
            'name' => $product['name'],
            'price' => $request['price'],
            'quanty' => $request['quanty'],
            'options' => ['size' => [$request['size']]],
        ];
        $request->session()->put('carts',$cart);
    }

    public function get($id)
    {
        return [
            'product' => Session::get($id)
        ];
    }

    public function all()
    {
        return [
            'product' => Session::all()
        ];
    }
    public function delete($id)
    {
        dd(session()->all());
        foreach(session()->get('carts') as $items){
            // dd($items[$id]);
        unset($items[$id]);
        
        // $cart[$id] = '';
        }
        dd(session()->all());
    }

    public function deleteAll()
    {
        Session::flush();
    }
}
?>