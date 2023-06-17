<?php

namespace App\Http\Controllers;
use App\Models\daftar_menu;
use Illuminate\Http\Request;

class teknik extends Controller
{
    function index(){
        return view("profil.index");
    }
    function menu(){   
        $d_menu = daftar_menu::all();
        return view('profil.index',[
            'daf_menu' => $d_menu,
        ]);
    }
    function list_menu(){
        return view("profil.pesanan");
    }
    function list(){   
        $list_menu = daftar_menu::all();
        return view('profil.pesanan',[
            'list' => $list_menu,
        ]);
    }
    function order(){
        return view("profil.daftar_menu");
    }
    function order_list(){   
        $list_order = daftar_menu::all();
        return view('profil.daftar_menu',[
            'order' => $list_order,
        ]);
    }

} 
