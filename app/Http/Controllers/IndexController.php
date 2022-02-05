<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public $products = array(
        ['id' => 1, 'name' => 'prod1', 'price' => 6000],
        ['id' => 2, 'name' => 'prod2', 'price' => 14000], 
        ['id' => 3, 'name' => 'prod3', 'price' => 11100], 
        ['id' => 4, 'name' => 'prod4', 'price' => 10000],
        ['id' => 5, 'name' => 'prod5', 'price' => 11000],
        ['id' => 6, 'name' => 'prod6', 'price' => 12000],
        ['id' => 7, 'name' => 'prod7', 'price' => 13000],
        ['id' => 8, 'name' => 'prod8', 'price' => 15000],
        ['id' => 9, 'name' => 'prod9', 'price' => 16000],
        ['id' => 10, 'name' => 'prod10', 'price' => 17000],
        ['id' => 11, 'name' => 'prod11', 'price' => 18000],
        ['id' => 12, 'name' => 'prod12', 'price' => 19000]);
    

    public function Home()
    {
        $categories = ['phones', 'wateches', 'sport wears', 'others'];
        return view('home', ['category' =>  $categories]);
    }
   
    public function Products()
    {
        
      
         return view('products' , ['products' => $this->products]);

    }

    public function details( $id){
       
            foreach ($this->products as  $prod) {

                if ($prod['id']==$id){
                    $products=$prod;
                }
            }
        
        return view ('productdetails', ['product'=>$products]);
        // return view ('product_details', compact('products'));

    }
}
