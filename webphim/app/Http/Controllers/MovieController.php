<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Country;
use Illuminate\Support\Str;
use File;
use Storage;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getDanhSach()
    {
        $movie = Movie::all();
        $category = Category::all();
        $genre = Genre::all();
        $country = Country::all();
        return view('admincp.movie.danhsach', compact('movie','category','genre','country'));
    }
    public function getThem()
    {
        $category = Category::all();
        $genre = Genre::all();
        $country = Country::all();
        return view('admincp.movie.them', compact('category','genre','country') );
    }
    public function postThem(Request $request)
    {
        $this->validate($request, [
            'category_id' =>['required'],
            'genre_id' =>['required'],
            'country_id' =>['required'],
            'title' => ['required', 'max:255' ],
            'title_en' => ['required', 'max:255'],
            'description' => ['required'],
            'status' => ['required'],
            'resolution' => ['required'],
            'phim_hot' => ['required'],
        ]);

       
        
        $orm = new Movie();
        $orm->category_id = $request->category_id;
        $orm->genre_id = $request->genre_id;
        $orm->country_id = $request->country_id;
        $orm->title = $request->title;
        $orm->title_en = $request->title_en;
		$orm->title_slug = Str::slug($request->title, '-');
        $orm->description = $request->description;
        $orm->status = $request->status;
        $orm->resolution = $request->resolution;
        $orm->phim_hot = $request->phim_hot;

        $get_image = $request->file('image');
        $path = 'public/uploads/movie/';

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName(); //hinhanh1.jpg
            $name_image = current(explode('.',$get_name_image)); //[0]=>hinhanh12454 . [1] =>jpg
            $new_image = $name_image.rand(0,999999).'.'.$get_image->getClientOriginalExtension(); //hinhanh12454.jpg
            $get_image->move($path,$new_image);
            $orm->image = $new_image;
        }


        $orm->save();
        
        return redirect()->route('movie');
    }
    
    public function getSua($id)
    {
        $movie = Movie::find($id);
        $category = Category::all();
        $genre = Genre::all();
        $country = Country::all();
        return view('admincp.movie.sua', compact('movie','category','genre','country'));
    }
    
    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'category_id' =>['required'],
            'genre_id' =>['required'],
            'country_id' =>['required'],
            'title' => ['required', 'max:255'],
            'title_en' => ['required', 'max:255'],
            'description' => ['required'],
            'status' => ['required'],
            'resolution' => ['required'],
            'phim_hot' => ['required'],
        ]);
        
        $orm = Movie::find($id);
        $orm->category_id = $request->category_id;
        $orm->genre_id = $request->genre_id;
        $orm->country_id = $request->country_id;
        $orm->title = $request->title;
		$orm->title_slug = Str::slug($request->title, '-');
        $orm->description = $request->description;
        $orm->status = $request->status;
        $orm->resolution = $request->resolution;
        $orm->phim_hot = $request->phim_hot;

        $get_image = $request->file('image');
        $path = 'public/uploads/movie/';

        if($get_image){
            if(!empty($orm->image)){
                unlink('public/uploads/movie/'.$orm->image);
            }
            $get_name_image = $get_image->getClientOriginalName(); //hinhanh1.jpg
            $name_image = current(explode('.',$get_name_image)); //[0]=>hinhanh12454 . [1] =>jpg
            $new_image = $name_image.rand(0,999999).'.'.$get_image->getClientOriginalExtension(); //hinhanh12454.jpg
            $get_image->move($path,$new_image);
            $orm->image = $new_image;
        }


        $orm->save();
        
        return redirect()->route('movie');
    }
    
    public function getXoa($id)
    {
        $orm = Movie::find($id);
        if(!empty($orm->image)){
            unlink('public/uploads/movie/'.$orm->image);
        }
        $orm->delete();
        
        return redirect()->route('movie');
    }
}
