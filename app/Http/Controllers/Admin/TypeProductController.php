<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class TypeProductController extends Controller
{
    public function index() {
        $category = Category::all();
        return view('admin.type.index',compact('category'));
    }

    public function create(){
        return view('admin.type.create');
    }
    public function insert(Request $request){
        $request->validate([
            'name' => 'required|unique:categories|max:255',

        ],
        [
            'name.required'=>'กรุณากรอกข้อมูล',
            'name.unique'=>'มีชื่อนี้อยู่ในฐานข้อมูลแล้ว',
            'name.max'=>'ตัวอักษรเกินที่กำหนด',
        ]);


        $category = new Category();
        $category->name = $request->name;
        $category->save();
        alert()->success('บันทึกข้อมูลสำเร็จ','');
        return redirect()->route('t.index');
    }

    public function edit($category_id){
        $category = Category::find($category_id);
        return view('admin.type.edit',compact('category'));
    }

    public function update(Request $request,$category_id){
        $category = Category::find($category_id);
        $category->name = $request->name;
        $category->save();
        alert()->success('แก้ไขข้อมูลสำเร็จ','');
        return redirect()->route('t.index');
    }

    public function delete($category_id){
        $category = Category::find($category_id);
        $category->delete();
        alert()->success('ลบข้อมูลสำเร็จ','');
        return redirect('admin/type/index');
    }

}
