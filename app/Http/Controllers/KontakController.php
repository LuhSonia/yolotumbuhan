<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function kontak(){
        $title="Dasboard Information";
      
        return view('admin.kontak', compact('title',));
    }
}
