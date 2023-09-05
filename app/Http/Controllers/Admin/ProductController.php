<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;


class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }

    public function create()
    {
        return view('admin.product.create');
    }
    public function insert(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->detail;
        $product->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            $filename = Str::random(10). '.' .$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/backend/product/image/',$filename);
            Image::make(public_path().'/backend/product/image/'.$filename);
            $product->image = $filename;
        } else {
            $product->image = 'nopic.jpg';
        }
        $product->save();
        alert()->success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('admin/product/index');
    }
}
