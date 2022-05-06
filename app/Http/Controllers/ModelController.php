<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyModel;
use Illuminate\Support\Facades\Auth;

class ModelController extends Controller
{
    //
    public function index(){
        $models = MyModel::where('tag_deleted',0)->with(['user'])->get();
        return view('layouts.admin.inventoryFolder.model',compact('models'));
    }

    public function create(Request $req){
        MyModel::create([
            'name' => $req->name,
            'remarks' => $req->remarks,
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id
        ]);
        return back();
    }

    public function edit(Request $req){
        $id = $req->mod_id;
        MyModel::where('id',$id)->update([
            'name' => $req->name,
            'remarks' => $req->remarks
        ]);
        return back();
    }

    public function delete($id){
        MyModel::where('id',$id)->update([
           'tag_deleted' => 1
        ]);
        return back();
    }

}
