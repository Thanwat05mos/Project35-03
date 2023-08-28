<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Products;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('admin.product.index',
            [
                'products' => $products,
            ]
        );
    }

    public function create()
    {
        return view('admin.product.create');
    }
}
