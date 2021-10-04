<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function getForm(){
        return view('form.form');
    }

    public function postForm(Request $request){
        // $this->validate($request, [
        //     'name' => 'required|string',
        //     'email' => 'email|required',
        //     'password' => 'required|max:20|min:4'
        // ]);

        $messages = [
            'name.required' => 'Please enter your name',
            'email.required' => 'Please enter your email address',
            'email.email' => 'Please enter a valid email address',
            'password.required' => 'Please enter your password',
            'password.min' => 'Please your password must be longer than 4 letters',
            'password.max' => 'Please your passwod must not be lnger than 20 letter',
        ];

        $rules  = [
            'name' => 'required|string',
            'email' => 'email|required',
            'password' => 'required|max:20|min:4'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->with('errors', $validator->errors());
        }

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        return redirect()->back()->with('success', 'User created');
    }

    public function queryBuilder(){
        $insert = [
            'name'=> 'Household',
            'description' => 'Description for household material'
        ];

        DB::table('categories')->insert($insert);
    }


}
