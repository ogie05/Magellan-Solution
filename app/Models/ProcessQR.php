<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessQR extends Model
{
    use HasFactory;

    protected $table = 'generated_qr';
    protected $fillable = ['type_id','unique_id','serial_no','brand_id','model_id','description','remarks','purchase_id','date_of_purchase','qr_path'];

    public function allias_type(){
        return $this->hasOne(Type::class,'id','type_id');
    }
}
