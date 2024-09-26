<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $users = [
            [
                "name" => "Rudo",
                "age" => 21
            ],
            [
                "name" => "Simon",
                "age" => 19
            ],
            [
                "name" => "Krystof",
                "age" => 17
            ]
        ];
        return view('dashboard',
            [
                "users" => $users
            ]
        );
    }
}
