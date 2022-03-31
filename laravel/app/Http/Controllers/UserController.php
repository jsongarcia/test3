<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{
    public function users() {
        $users = DB::select("select * from testTable;");
        return view('users.index', ['users'=>$users]);
    }
    public function show($id) {
        return $id;
    }

    public function insertUser(Request $req){
        $name = $req->input('name');
        $pass = $req->input('pass');
        DB::insert("insert into testTable(Name,Password) values(?,?)",[$name,$pass]);
        echo "Inserted $name succesfully<br /><br /><a href='register'>Go back</a>";
    }
}
