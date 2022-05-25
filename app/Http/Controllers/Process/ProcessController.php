<?php

namespace App\Http\Controllers\Process;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Brand;
use App\Models\MyModel;
use App\Models\ProcessQR;
use App\Models\SystemSettings;
use Symfony\Component\Process\Process;

class ProcessController extends Controller
{
    //
    public function index(){
        $types = Type::all();
        $brands = Brand::all();
        $models = MyModel::all();
        return view('layouts.admin.processIndex',compact('types','brands','models'));

    }

    // public function generateqrcode(){
    //     $types = Type::all();
    //     $brands = Brand::all();
    //     $models = MyModel::all();
    //     return view('layouts.admin.processFolder.generateqrcode',compact('types','brands','models'));
    // }

    public function generateqr(Request $req){
        $how = $req->number;
        for($x = 1;$x<=$how;$x++){
            $type = Type::where('id',$req->type)->first();
            $cc = SystemSettings::where('id',2)->first();
            
                ProcessQR::create([
                    'type_id' => $req->type,
                    'unique_id' =>$type->alias . $cc->value+1,
                    'brand_id' => $req->brand,
                    'model_id' => $req->model,
                    'description' => $req->description,
                    'remarks' =>$req->remarks,
                    'purchase_id' => $req->po,
                    'date_of_purchase' => $req->dop
                ]);

                SystemSettings::where('id',2)->update([
                    'value' => $cc->value+1
                ]);
        }
        return back();
    }

    public function manual(){
        $types = Type::all();
        $brands = Brand::all();
        $models = MyModel::all();
        return view('layouts.admin.processFolder.manualencode',compact('types','brands','models'));
    }

    public function processgeneratedqr(){
        return view('layouts.admin.processFolder.generatedqr');
    }

    public function submit(Request $req){
        if($req->filled('uid','serial','description','brand','model','type','remarks')){
            ProcessQR::create([
                'unique_id'=>$req->uid,
                'serial_no' =>$req->serial,
                'description' => $req->description,
                'brand_id' => $req->brand,
                'model_id' => $req->model,
                'type_id' => $req->type,
                'remarks' => $req->remarks
            ]);
        }else{
            return 123;
        }
        
        return back();
    }
}
