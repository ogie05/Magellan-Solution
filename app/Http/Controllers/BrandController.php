<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\LogHistory;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BrandController extends Controller
{
    //
    public function index(){
        $brands = Brand::where('tag_deleted',0)->with(['user'])->get();
        return view('layouts.admin.inventoryFolder.brand',compact('brands'));
    }

    public function create(Request $req){
        if($req->filled('name') && $req->filled('remarks')){
            Brand::create([
                'name' => $req->name,
                'remarks' => $req->remarks,
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id
            ]);
            Alert::success('Success', 'Added new brand');
            $name = Auth::user()->name;
            LogHistory::create([
                'description' => "New brand created by ".$name,
                'user' => $name,
                'user_id' => Auth::user()->id,
                'tag_deleted' =>0
            ]);
            return back();
        }else{
            Alert::error('Empty Input', 'Fill up all fields');
            return back();
        }

    }

    public function edit(Request $req){
        $id = $req->brand_id;
        Brand::where('id', $id)->update([
            'name'=>$req->name,
            'remarks'=>$req->remarks
        ]);
        Alert::success('Success', 'Brand Edit Successfully');
        $name = Auth::user()->name;
        LogHistory::create([
            'description' => "Brand id: ".$id." name edited to ".$req->name." and remarks edited to ".$req->remarks." by ".$name,
            'user' => $name,
            'user_id' => Auth::user()->id,
            'tag_deleted' =>0
        ]);
        return back();
    }

    public function delete($id){

        Brand::where('id', $id)->update([
            'tag_deleted'=>1
        ]);

        $name = Auth::user()->name;
        LogHistory::create([
            'description' => "User ".$name." deleted brand id ".$id,
            'user' => $name,
            'user_id' => Auth::user()->id,
            'tag_deleted' =>0
        ]);
        return back();
    }

}
