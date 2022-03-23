<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use Illuminate\Support\Str;

class GenreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getDanhSach()
    {
        $genre = Genre::all();
        return view('admincp.genre.danhsach', compact('genre'));
    }
    public function getThem()
    {
        return view('admincp.genre.them');
    }
    public function postThem(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'max:255', 'unique:genre'],
            'description' => ['required'],
            'status' => ['required', 'numeric'],
        ]);
        
        $orm = new Genre();
        $orm->title = $request->title;
		$orm->title_slug = Str::slug($request->title, '-');
        $orm->description = $request->description;
        $orm->status = $request->status;
        $orm->save();
        
        return redirect()->route('genre');
    }
    
    public function getSua($id)
    {
        $genre = Genre::find($id);
        return view('admincp.genre.sua', compact('genre'));
    }
    
    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'title' => ['required', 'max:255', 'unique:genre,title,' . $id],
            'description' => ['required'],
            'status' => ['required', 'numeric'],
        ]);
        
        $orm = Genre::find($id);
        $orm->title = $request->title;
		$orm->title_slug = Str::slug($request->title, '-');
        $orm->description = $request->description;
        $orm->status = $request->status;
        $orm->save();
        
        return redirect()->route('genre');
    }
    
    public function getXoa($id)
    {
        $orm = Genre::find($id);
        $orm->delete();
        
        return redirect()->route('genre');
    }
}
