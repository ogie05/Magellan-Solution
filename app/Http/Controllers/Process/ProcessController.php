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
        return view('layouts.admin.processFolder.processIndex',compact('types','brands','models'));

    }

    public function generateqrcode(){
        return view('layouts.admin.processFolder.generateqrcode');
    }

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

    public function processgeneratedqr(){
        return view('layouts.admin.processFolder.generatedqr');
    }
}
