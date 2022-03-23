<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use Illuminate\Support\Str;

class CountryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getDanhSach()
    {
        $country = Country::all();
        return view('admincp.country.danhsach', compact('country'));
    }
    public function getThem()
    {
        return view('admincp.country.them');
    }
    public function postThem(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'max:255', 'unique:country'],
            'description' => ['required'],
            'status' => ['required', 'numeric'],
        ]);
        
        $orm = new Country();
        $orm->title = $request->title;
		$orm->title_slug = Str::slug($request->title, '-');
        $orm->description = $request->description;
        $orm->status = $request->status;
        $orm->save();
        
        return redirect()->route('country');
    }
    
    public function getSua($id)
    {
        $country = Country::find($id);
        return view('admincp.country.sua', compact('country'));
    }
    
    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'title' => ['required', 'max:255', 'unique:country,title,' . $id],
            'description' => ['required'],
            'status' => ['required', 'numeric'],
        ]);
        
        $orm = Country::find($id);
        $orm->title = $request->title;
		$orm->title_slug = Str::slug($request->title, '-');
        $orm->description = $request->description;
        $orm->status = $request->status;
        $orm->save();
        
        return redirect()->route('country');
    }
    
    public function getXoa($id)
    {
        $orm = Country::find($id);
        $orm->delete();
        
        return redirect()->route('country');
    }
}
