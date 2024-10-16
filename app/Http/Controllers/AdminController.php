<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Flasher\Toastr\Prime\ToastrInterface;

class AdminController extends Controller
{
    public function view_category()
    {
        $data=Category::all();
        return view("admin.category",compact("data"));
    }

    public function add_category(Request $request)//this is a post method
    {
        $category = new Category;
        $category->category_name = $request->category;
        $category->save();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Category added successfully.');
        return redirect()->back();
        
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Category deleted successfully.');
        return redirect()->back();
    }
}
