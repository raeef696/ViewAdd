<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class datafileController extends Controller
{
    public function dataview()
    {
        $viwe_add = DB::table('viwe_add')->get();
        return view('welcome', compact('viwe_add'));
    }



    public function ins()
    {
        DB::table('viwe_add')->insert([
            'Firstname' => $_REQUEST['first'],
            'faristname' => $_REQUEST['last'],
            'email' => $_REQUEST['email'],
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return 'Done';
    }
}
