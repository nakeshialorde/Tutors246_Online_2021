<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function basicoperations()
    {
        return view('basicoperations');
    }
    
     public function enrolled()
    {
        return view('enrolled');
    }
    
         public function progress()
    {
        return view('progress');
    }
            public function fractions()
    {
        return view('fractions');
    }
    
    
     public function powers()
    {
        return view('powers');
    }
   
        public function courseindex()
    {
        return view('courseindex');
    }

        public function courses()
    {
        return view('courses');
    }
    
        public function profile()
    {
        return view('profile');
    }
    
     public function courselist()
    {
        return view('courselist');
    }
    
      public function chapter1index()
    {
        return view('chapter1index');
    }
      public function chapter2index()
    {
        return view('chapter2index');
    }
    
      public function chapter3index()
    {
        return view('chapter3index');
    }
    
      public function chapter4index()
    {
        return view('chapter4index');
    }
    
      public function chapter5index()
    {
        return view('chapter5index');
    }
    
      public function chapter6index()
    {
        return view('chapter6index');
    }
    
      public function chapter7index()
    {
        return view('chapter7index');
    }
    
      public function chapter8index()
    {
        return view('chapter8index');
    }
    
      public function chapter9index()
    {
        return view('chapter9index');
    }
    
      public function pastpaperindex()
    {
        return view('pastpaperindex');
    }

    public function setsofnumbers()
    {
        return view('setsofnumbers');
    }
    
    
    public function conceptofavector()
    {
        return view('conceptofavector');
    }

}
