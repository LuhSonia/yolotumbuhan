<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $title="Data Mahasiswa";
        $data['mahasiswa']=array(
            'nim'=>'2255013001',
            'nama'=>'Cindyka'
        );
        $data['user']='';
        return view('admin.beranda', compact('title','data'));
    }
    public function dasboard(){
        $title="Dasboard Information";
      
        return view('admin.dasboard', compact('title',));
    }
}