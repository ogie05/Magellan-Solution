<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'mst_brand';
    protected $fillable = ['name','status','remarks','created_by','updated_by','tag_deleted'];
}
