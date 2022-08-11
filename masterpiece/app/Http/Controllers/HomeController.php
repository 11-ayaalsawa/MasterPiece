<?php

namespace App\Http\Controllers;

use App\Models\subcategories;
use Illuminate\Http\Request;


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

        return view('package');
    }

    public function Shops(){

        return view('shops');
    }

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
}
