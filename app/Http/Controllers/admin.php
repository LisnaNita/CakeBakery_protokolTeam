<?php

namespace App\Http\Controllers;
use App\Models\daftar_menu;
use Illuminate\Http\Request;

class admin extends Controller
{
    function index()
    {
        return view('admin.index');
    }
    function list_menu()
    {
        $list = daftar_menu::all();
        return view('admin.daftar_menu', [
            'list_menu' => $list,
        ]);
    }
    function submit()
    {
        return view('admin.tamba_menu');
    }
    function save_menu(Request $request)
    {
       $savelist = new daftar_menu;
       $savelist->nama=$request->nama;
       $savelist->harga=$request->harga;
       $savelist->gambar=$request->gambar;
       $savelist->save();
       return redirect('admin/daftar_menu');
    }
    function edit($id)
    {
        $list = daftar_menu::find($id);
        return view('admin.edit_menu', [
            'list_menu' => $list,
        ]);
    }
    function update_menu($id, Request $request)
    {
        $updatelist = daftar_menu::find($id);
        $updatelist->nama =$request->input('nama');
        $updatelist->harga =$request->input('harga');
        $updatelist->gambar =$request->input('gambar');
        $updatelist->save();
        return redirect('/admin/daftar_menu');
    }
    function delete_menu($id)
    {
        $deletelist = daftar_menu::find($id);
        $deletelist->delete();
        return redirect('/admin/daftar_menu');
    }
}
