<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Auth;


class BrandController extends Controller
{
    //
    public function index(){
        $brands = Brand::where('tag_deleted',0)->with(['user'])->get();
      
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

    public function edit(Request $req){
        $id = $req->brand_id;
        Brand::where('id', $id)->update([
            'name'=>$req->name,
            'remarks'=>$req->remarks
        ]);
        return back();
    }

    public function delete($id){
        
        Brand::where('id', $id)->update([
            'tag_deleted'=>1
        ]);
        return back();
    }

}
