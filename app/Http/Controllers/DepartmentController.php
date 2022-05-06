<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    //
    public function index(){
        $departments = Department::where('tag_deleted',0)->with(['user'])->get();

        return view('layouts.admin.inventoryFolder.department',compact('departments'));
    }

    public function create(Request $req){
        Department::create([
            'name' => $req->name,
            'remarks' => $req->remarks,
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id
        ]);
        return back();
    }
}
