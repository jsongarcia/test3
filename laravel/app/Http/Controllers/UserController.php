<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $title = "hallo";
        $desc = "hehehe";
        $data = [
            "Name" => "Jason",
            "Age" => "20",
            "Gender" => "Male"
        ];
        return view('users.index', compact('data'));
    }
    public function show($id) {
        return $id;
    }
}
