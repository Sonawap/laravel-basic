<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function getUsers(){

        $users = User::all();

        return view('users.index', ['users' => $users]);
    }

    public function about(){
        return view('about');
    }

    public function contact(Request $request){
        // if($request->get('page')){
        //     return $request->get('page');
        // }

        // if($request->page){
        //     return $request->page;
        // }
        return view('contact');
    }

    public function getParamContact($id){
        $name = "Codeitmi";
        return view('contactPramsView', ['id' => $id, 'name' => $name]);
    }
}
