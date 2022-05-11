<?php

namespace App\Http\Controllers\Process;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Brand;
use App\Models\MyModel;

class ProcessController extends Controller
{
    //
    public function index(){
        $types = Type::all();
        $brands = Brand::all();
        $models = MyModel::all();
        return view('layouts.admin.processFolder.processIndex',compact('types','brands','models'));

    }
}
