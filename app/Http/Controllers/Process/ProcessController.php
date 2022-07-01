<?php

namespace App\Http\Controllers\Process;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Brand;
use App\Models\MyModel;
use App\Models\ProcessQR;
use App\Models\SystemSettings;
use RealRashid\SweetAlert\Facades\Alert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
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

        if($req->filled('type') && $req->filled('number') && $req->filled('brand') && $req->filled('model') &&$req->filled('description') && $req->filled('remarks') && $req->filled('po') && $req->filled('dop')){
            $how = $req->number;
            for($x = 1;$x<=$how;$x++){

                $type = Type::where('id',$req->type)->first();
                $cc = SystemSettings::where('id',2)->first();
                $qrpath = 'https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl='.$cc->value+1;
                    ProcessQR::create([
                        'type_id' => $req->type,
                        'unique_id' =>$type->alias . $cc->value+1,
                        'serial_no' =>$type->alias . $cc->value+1 . $req->brand,
                        'brand_id' => $req->brand,
                        'model_id' => $req->model,
                        'description' => $req->description,
                        'remarks' =>$req->remarks,
                        'purchase_id' => $req->po,
                        'date_of_purchase' => $req->dop,
                        'qr_path' => $qrpath
                    ]);

                    SystemSettings::where('id',2)->update([
                        'value' => $cc->value+1
                    ]);
            }
            Alert::success('Success', 'Generate New QR');
            return back();
        }else{
            Alert::error('Empty Input', 'Fill up all fields');
            return back();
        }
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


        $ctr = count($req->uid);
        for ($i=0; $i < $ctr; $i++) {
            $cc = SystemSettings::where('id',2)->first();
            $add = $cc->value+1;
            $qrpath = 'https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl='. $add;
            $units[] = [
                'unique_id'=>$req->uid[$i],
                'serial_no' =>$req->serial[$i],
                'description' => $req->description[$i],
                'brand_id' => $req->brand[$i],
                'model_id' => $req->model[$i],
                'type_id' => $req->type[$i],
                'remarks' => $req->remarks[$i],
                'qr_path' =>$qrpath
            ];
            ProcessQR::create($units[$i]);
            SystemSettings::where('id',2)->update([
                'value' => $add
            ]);
        }


            // foreach($req->uid as $key=>$uid){


            // ProcessQR::create($units);

        return back();
    }

    public function generatedqr(){
        $types = Type::all();
        $brands = Brand::all();
        $models = MyModel::all();
        $genqrs = ProcessQR::all();
        return view('layouts.admin.processFolder.generatedqr',compact('types','brands','models','genqrs'));
    }
}
