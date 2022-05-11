<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogHistory extends Model
{
    use HasFactory;
    protected $table = 'logs';
    protected $fillable = ['description','user','user_id','created','updated','status','opened','tag_deleted'];
}
