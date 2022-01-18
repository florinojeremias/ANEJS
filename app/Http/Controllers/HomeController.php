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
       // $this->middleware('auth');
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

    public function actividades(){
        return view('homepage.actividades');
    }
    public function about(){
        return view('homepage.about');
    }
    
    public function admin(){
        return view('admin.index'); 
    }

   public function candMembros(){
       return view('admin.membro.candiMembros');
   }

   public function membros_ccargo(){
       return view('admin.membro.membcomcargo');
   }

   public function pajuda(){
       return view('admin.ajuda.pajuda');
   }
}
