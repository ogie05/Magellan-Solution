<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyModel;
use App\Models\LogHistory;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ModelController extends Controller
{
    //
    public function index(){
        $models = MyModel::where('tag_deleted',0)->with(['user'])->get();
        return view('layouts.admin.inventoryFolder.model',compact('models'));
    }

    public function create(Request $req){
        if($req->filled('name') && $req->filled('remarks')){
        MyModel::create([
            'name' => $req->name,
            'remarks' => $req->remarks,
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id
        ]);
        Alert::success('Success', 'Added new model');
        $name = Auth::user()->name;
        LogHistory::create([
            'description' => "New model created by ".$name,
            'user' => $name,
            'user_id' => Auth::user()->id,
            'tag_deleted' =>0
        ]);

        return back();
        }
        else{
            Alert::error('Empty Input', 'Fill up all fields');
            return back();
        }
    }

    public function edit(Request $req){
        $id = $req->mod_id;
        MyModel::where('id',$id)->update([
            'name' => $req->name,
            'remarks' => $req->remarks
        ]);
        Alert::success('Success', 'Model Edit Successfully');
        $name = Auth::user()->name;
        LogHistory::create([
            'description' => "Model id: ".$id." name edited to ".$req->name." and remarks edited to ".$req->remarks." by ".$name,
            'user' => $name,
            'user_id' => Auth::user()->id,
            'tag_deleted' =>0
        ]);

        return back();
    }

    public function delete($id){
        MyModel::where('id',$id)->update([
           'tag_deleted' => 1
        ]);

        $name = Auth::user()->name;
        LogHistory::create([
            'description' => "User ".$name." deleted Model id ".$id,
            'user' => $name,
            'user_id' => Auth::user()->id,
            'tag_deleted' =>0
        ]);
        return back();
    }

}
