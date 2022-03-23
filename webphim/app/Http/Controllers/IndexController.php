<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Country;
use App\Models\Movie;
use App\Models\Episode;
use DB;


class IndexController extends Controller
{
    public function home()
    {
        $category = Category::orderBy('id','DESC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->where('status',1)->get();
        $country = Country::orderBy('id','DESC')->where('status',1)->get();
        $category_home = Category::orderBy('id','DESC')->where('status',1)->get();
        $movie = Movie::orderBy('id','DESC')->where('status',1)->get();
        $phimhot = Movie::where('phim_hot',1)->where('status',1)->get();
        return view('pages.home',compact('category','genre','country','category_home','movie','phimhot'));
    }
    public function category($title_slug)
    {
        $category = Category::orderBy('id','DESC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->where('status',1)->get();
        $country = Country::orderBy('id','DESC')->where('status',1)->get();
        $cate_slug = Category::Where('title_slug',$title_slug)->first();
        $movie = Movie::where('category_id',$cate_slug->id)->paginate(40);
        return view('pages.category',compact('category','genre','country','cate_slug','movie'));
    }
    public function genre($title_slug)
    {
        $category = Category::orderBy('id','DESC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->where('status',1)->get();
        $country = Country::orderBy('id','DESC')->where('status',1)->get();
        $gen_slug = Genre::Where('title_slug',$title_slug)->first();
        $movie = Movie::where('genre_id',$gen_slug->id)->paginate(10);
        return view('pages.genre',compact('category','genre','country','gen_slug','movie'));
    }
    public function country($title_slug)
    {
        $category = Category::orderBy('id','DESC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->where('status',1)->get();
        $country = Country::orderBy('id','DESC')->where('status',1)->get();
        $count_slug = Country::Where('title_slug',$title_slug)->first();
        $movie = Movie::where('country_id',$count_slug->id)->paginate(10);
        return view('pages.country',compact('category','genre','country','count_slug','movie'));
    }
    public function movie($title_slug)
    {
        $category = Category::orderBy('id','DESC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->where('status',1)->get();
        $country = Country::orderBy('id','DESC')->where('status',1)->get();
        $movie = Movie::where('title_slug',$title_slug)->where('status',1)->first();
        $related = Movie::where('category_id',$movie->category->id)->orderby(DB::raw('RAND()'))->whereNotIn('title_slug',[$title_slug])->get();
        return view('pages.movie',compact('category','genre','country','movie','related'));
    }
    public function watch()
    {
        $category = Category::orderBy('id','DESC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->where('status',1)->get();
        $country = Country::orderBy('id','DESC')->where('status',1)->get();
        return view('pages.watch',compact('category','genre','country'));
    }
    public function episode()
    {
        $category = Category::orderBy('id','DESC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->where('status',1)->get();
        $country = Country::orderBy('id','DESC')->where('status',1)->get();
        return view('pages.episode',compact('category','genre','country'));
    }
}
