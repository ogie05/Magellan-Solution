<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
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
        return back();
    }

    public function edit(Request $req){
        $id = $req->type_id;
        Type::where('id',$id)->update([
            'name' => $req->name,
            'remarks' => $req->remarks,
        ]);
        return back();
    }

    public function delete($id){
        Type::where('id',$id)->update([
            'tag_deleted' => 1
        ]);
        return back();
    }
}
