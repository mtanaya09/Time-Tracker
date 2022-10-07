<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        
        /* ORDERING, SORTING AND LIMIT THE DATA IN DATABASE
        |
        |  $data = Students::where('age', '>', '30')->orderBy('first_name', 'desc')->limit(10)->get();
        |
        */



        /*  GET COUNT BY GENDER IN DATABASE
        |
        |   $data = DB::table('students')
        |       ->select(DB::raw('count(*) as gender_count, gender'))->groupBy('gender')->get();
        |
        */

        $data = Students::where('id', 100)->firstOrFail()->get();

        return view('students.index', ['students' => $data]); 
    }

    public function show($id){
        $data = Students::findOrFail($id);
        dd($data);
        return view('students.index', ['students' => $data]);
    }
}
