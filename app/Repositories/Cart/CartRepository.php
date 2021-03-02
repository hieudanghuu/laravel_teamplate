<?php 
namespace App\Repositories\Cart;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
class CartRepository
{
    public function add($request,$id)
    {
        // Cart::destroy();
        // return;
        $price = $request['price'] * (100 - ($request['sale'])/100);
        $flag = false;    
        foreach(Cart::content() as $item){
            if($item->id == $id){    
                $size = $request['size'];
                $options = [$size];
                foreach($item->options['size'] as $option){
                    array_push($options,$option);
                }
                $item->options['size'] = $options;
                Cart::update($item->rowId,[
                    'qty' => $request['quanty'] + $item->qty,
                    'price' => $request['price'] + $item->price,    
                    'options'=>   $item->options,
                ]);
                $flag = true;
            }
        }
        if(!$flag){
            $product = Product::findOrFail($id);
            Cart::add([
                'id' => $id,
                'name' => $product,
                'qty' => $request['quanty'],
                'price' => $request['price'],
                'weight' => 0,
                'options'=> ['size' => [$request['size']]],
            ]);
        }      
    }
}