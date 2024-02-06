<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main_Model;
class UserController extends Controller
{
    protected $main_m;
    public function __construct(Main_Model $main_m){
        $this->main_m = $main_m;
    }
    public function register (Request $request){
        // $fields = $request-> validate([
        //     'name' => ['re  :3', 'max:20'],
        //     'email' => ['required', 'email'],
        //     'password' => ['required', 'min:8', 'max:13]
        // ]);
        // return 'GGS';

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $this->main_m->insertUser(array(
            "email" => $email,
            "password" => $password,
            "name" => $name,
        ));

        return back()->with("status","success");

    }
}
