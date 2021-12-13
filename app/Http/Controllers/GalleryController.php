<?php

namespace App\Http\Controllers;
use App\Models\Model_Konten;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    
    public function gallery(){
        $data1=Model_Konten::all();
        return view('gallery')->with([
            'data'=>$data1
        ]);
    }
}