<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Auth;


class BrandController extends Controller
{
    //
    public function index(){
        $brands = Brand::all();
        return view('layouts.admin.inventoryFolder.brand',compact('brands'));
    }

    public function create(Request $req){
        Brand::create([
            'name' => $req->name,
            'remarks' => $req->remarks,
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id
        ]);
        return back();
    }
}
