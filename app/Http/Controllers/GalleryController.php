<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery(){
        $title="Dasboard Information";
      
        return view('admin.gallery', compact('title',));
    }
}
