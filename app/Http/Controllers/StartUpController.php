<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StartUpController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user()->name;
        $members = DB::table('members')->where('startup_name', $user)->get();
        return [$user , $members];
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'path' => 'required',
        ]);

        DB::table('members')->insert(
            [   'startup_name' => Auth::user()->name ,
                'member_id' => uniqid(),
                'work_ex' => $request['work'],
                'name' => $request['name'],
                'sex' => $request['sex'],
                'resume' => $request['path'],
                'email' => $request['email']
            ]
        );

        return ['Message' => Auth::user()->name];

    }

    public function edit(Request $request)
    {

        DB::table('users')->updateOrInsert([
            'name' => Auth::user()->name
        ],
            ['description' => $request['description'],
             'domain' => implode(",",$request['domain'])
            ]
            );
    }
}
