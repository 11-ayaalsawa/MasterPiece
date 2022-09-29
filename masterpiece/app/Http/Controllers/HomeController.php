<?php


namespace App\Http\Controllers;

use App\Models\shops;
use App\Models\products;
use Illuminate\Http\Request;

use App\Models\subcategories;
use Illuminate\Support\Facades\DB;

session_start();
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function About(){

        return view('about');
    }

    public function Profile(){

        return view('profile');
    }


    
    public function Contact(){

        return view('contact');
    }

    // public function Bride(){

    //     return view('bride');
    // }

    public function Groom(){

        return view('groom');
    }

    public function Venue(){

        return view('venue');
    }

    public function Package(){
        $items=[];
        $items_id=[];
        if (isset ($_SESSION["cart_items"])){
            $items_id= $_SESSION["cart_items"];
        }
        foreach ($items_id as $item) {
            array_push($items, DB::select('select * from products where product_id='.$item));
           
        }
       
        return view('package',compact('items'));
        
    }

    // public function Shops(){

    //     return view('shops');
    // }

    public function Product(){

        return view('product');
    }

    public function Single(){

        return view('single');
    }


    public function fetch(){
        $data = subcategories::all()->where('sub_category', '=', 'Bride');
        ;
        return view('bride', compact('data'));
    }

    public function fetch2(){
        $data = subcategories::all()->where('sub_category', '=', 'Groom');
        return view('groom', compact('data'));
    }

    public function fetch3(){
        $data = subcategories::all()->where('sub_category', '=', 'Venue');
        return view('venue', compact('data'));
    }

    // public function fetch4(){
    //     $data = shops::all()->where('sub_id', '=', '1');
    //     return view('shops', compact('data'));
    // }

    public function fetch4($id){
        $data = shops::all()->where('sub_id', '=', $id);
        return view('shops', compact('data'));
    }

    public function fetch5($id){
        $data = products::all()->where('shop_id', '=', $id);
        return view('product', compact('data'));
    }

    
    public function fetch6($id){
        $data = products::all()->where('product_id', '=', $id);
        return view('single', compact('data'));
    }

    public function addtocart(){
        $id= request("cart_item");
        $cart_items=[];
        if (isset ($_SESSION["cart_items"])){
            $cart_items= $_SESSION["cart_items"];
        }
        array_push($cart_items, $id);

        $_SESSION["cart_items"]= $cart_items;
        // dd($_SESSION['cart_items']);
        return redirect("/package")-> with("status", "Your item has been added successfully" );
        
    }

        
    public function delete($id){
        $cart_items= $_SESSION["cart_items"];
      
        $delete=array_search($id,$cart_items);
        unset($delete);
        array_values($cart_items);
        
        return redirect("/package")-> with("status", "Your item is deleted" );
    }

    
    public function reservation(){

        return view('reservation');
    }

    
}
