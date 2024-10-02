<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin_dashboard');
    }
    public function view_category()
    {
        $data= Cats::all();
        return view('admin.category',compact('data'));
    }
    public function add_category(Request $request)
    {
        $category= new Cats();
        $category->category_name=$request->categoryname;
        $category->save();
        return redirect()->back()->with('message','Added Successfully');
    }
    public function delete_category($id)
    {
        $data=Cats::find($id);
        $data->delete();
        return redirect()->back();
       
    }
    public function edit_category($id)
    {
        $data=Cats::find($id);
        
        return view('admin.edit_category',compact('data'));
       
    }
    public function update_category(Request $request,$id)
    {
        $data=Cats::find($id);
        $data->category_name=$request->categoryname;
        $data->save();
        return redirect()->back()->with('message','Success message');
    }
}
