<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
class DashboardController extends Controller
{
    public function index(){

        Post::create([
            'content' => 'test Lorem ipsum',
            'likes' => 15,
        ]);

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
                "users" => $users,
                "posts" => Post::all(),
            ]
        );
    }
}
