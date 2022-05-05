<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'mst_dept';
    protected $fillable = ['name','status','remarks','created_by','updated_by','tag_deleted'];

    public function user(){
        return $this->hasOne(User::class,'id','created_by');
    }
}
