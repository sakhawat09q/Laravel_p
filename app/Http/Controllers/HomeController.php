<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //here the logic section
    public function selff($cat,$id){
        // return view('self',['category'=> $cat, 'id'=> $id]);
        return view('self',compact('cat','id'));
    }
    
    public function products(){

        $products=[
            array('id'=>1,'name'=>'Sakhawat Hossain','price'=>200),
            array('id'=>2,'name'=>'Hafizul','price'=>100),
            array('id'=>3,'name'=>'Abidur Rahman','price'=>50)
        ];

        //  dd($products);
        return view('products',compact('products'));
    }
}
