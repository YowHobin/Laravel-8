<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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

        /* user home */
    public function index()
    {
        $products = Product::latest()->paginate(2);
        return view('home',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /* public function adminHome()
    {
        return view('products.index');
    } */

    public function adminHome()
{
    return redirect()->route('products.index');
}
}
