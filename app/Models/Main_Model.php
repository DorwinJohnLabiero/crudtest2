<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Main_Model extends Model
{
    use HasFactory;
    function insertUser($data){
        $result = DB::table("users")->insert($data);
    }
}
