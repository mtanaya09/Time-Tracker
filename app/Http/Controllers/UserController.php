<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "Hello user controller";
    }

    //show a form that will create new student or user 
    public function create()
    {
        return view('user.create');
    }

    public function show($id)
    {

        $data = ['data' => 'data from database'];

        return view('user')
            ->with('data', $data)
            ->with('name', 'Kel tanayas')
            ->with('age', '22')
            ->with('email', 'm.tanaya.prescribe-digital.com')
            ->with('id', $id);
    }
};
