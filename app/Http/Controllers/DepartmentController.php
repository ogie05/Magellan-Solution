<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\LogHistory;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DepartmentController extends Controller
{
    //
    public function index(){
        $departments = Department::where('tag_deleted',0)->with(['user'])->get();

        return view('layouts.admin.inventoryFolder.department',compact('departments'));
    }

    public function edit(Request $req){
        $id = $req->dep_id;
        Department::where('id',$id)->update([
            'name' => $req->name,
            'remarks' => $req->remarks
        ]);
        Alert::success('Success', 'Department Edit Successfully');
        $name = Auth::user()->name;
        LogHistory::create([
            'description' => "Department id: ".$id." name edited to ".$req->name." and remarks edited to ".$req->remarks." by ".$name,
            'user' => $name,
            'user_id' => Auth::user()->id,
            'tag_deleted' =>0
        ]);

        return back();
    }

    public function create(Request $req){
        if($req->filled('name') && $req->filled('remarks')){
            Department::create([
                'name' => $req->name,
                'remarks' => $req->remarks,
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id
            ]);
            Alert::success('Success', 'Added new department');
            $name = Auth::user()->name;
            LogHistory::create([
                'description' => "New department created by ".$name,
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

    public function delete($id){
        // dd($id);
        Department::where('id',$id)->update([
            'tag_deleted' => 1
        ]);

        $name = Auth::user()->name;
        LogHistory::create([
            'description' => "User ".$name." deleted department id ".$id,
            'user' => $name,
            'user_id' => Auth::user()->id,
            'tag_deleted' =>0
        ]);
        return back();
    }
}
