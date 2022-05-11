<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\LogHistory;
use Illuminate\Support\Facades\Auth;

class TypeController extends Controller
{
    //
    public function index(){
        $types = Type::where('tag_deleted',0)->with(['user'])->get();
        return view('layouts.admin.inventoryFolder.type',compact('types'));
    }

    public function create(Request $req){

        Type::create([
            'name' => $req->name,
            'remarks' => $req->remarks,
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id
        ]);

        $name = Auth::user()->name;
        LogHistory::create([
            'description' => "New type created by ".$name,
            'user' => $name,
            'user_id' => Auth::user()->id,
            'tag_deleted' =>0
        ]);

        return back();
    }

    public function edit(Request $req){
        $id = $req->type_id;
        Type::where('id',$id)->update([
            'name' => $req->name,
            'remarks' => $req->remarks,
        ]);

        $name = Auth::user()->name;
        LogHistory::create([
            'description' => "Type id: ".$id." name edited to ".$req->name." and remarks edited to ".$req->remarks." by ".$name,
            'user' => $name,
            'user_id' => Auth::user()->id,
            'tag_deleted' =>0
        ]);

        return back();
    }

    public function delete($id){
        Type::where('id',$id)->update([
            'tag_deleted' => 1
        ]);

        $name = Auth::user()->name;
        LogHistory::create([
            'description' => "User ".$name." deleted type id ".$id,
            'user' => $name,
            'user_id' => Auth::user()->id,
            'tag_deleted' =>0
        ]);

        return back();
    }
}
