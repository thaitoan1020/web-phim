<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getDanhSach()
    {
        $category = Category::all();
        return view('admincp.category.danhsach', compact('category'));
    }
    public function getThem()
    {
        return view('admincp.category.them');
    }
    public function postThem(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'max:255', 'unique:category'],
            'description' => ['required'],
            'status' => ['required', 'numeric',],
        ]);
        
        $orm = new Category();
        $orm->title = $request->title;
		$orm->title_slug = Str::slug($request->title, '-');
        $orm->description = $request->description;
        $orm->status = $request->status;
        $orm->save();
        
        return redirect()->route('category');
    }
    
    public function getSua($id)
    {
        $category = Category::find($id);
        return view('admincp.category.sua', compact('category'));
    }
    
    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'title' => ['required', 'max:255', 'unique:category,title,' . $id],
            'description' => ['required'],
            'status' => ['required', 'numeric'],
        ]);
        
        $orm = Category::find($id);
        $orm->title = $request->title;
		$orm->title_slug = Str::slug($request->title, '-');
        $orm->description = $request->description;
        $orm->status = $request->status;
        $orm->save();
        
        return redirect()->route('category');
    }
    
    public function getXoa($id)
    {
        $orm = Category::find($id);
        $orm->delete();
        
        return redirect()->route('category');
    }
}
