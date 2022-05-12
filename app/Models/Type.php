<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = 'mst_type';
    protected $fillable = ['name','alias','status','remarks','created_by','updated_by','tag_deleted','sequence_no'];

    public function user(){
        return $this->hasOne(User::class,'id','created_by');
    }
}
