<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\employee;
use App\Models\report;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiAuthController extends Controller
{
    public function handleRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required',
            'password' => 'required|string|max:50|min:4',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors);
        }

        $is_user = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if(! $is_user)
        {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'remember_token' => Str::random(64),
            ]);
            return response()->json([
                'status'      => 200,
                'message'     => $request->name . ' ' .'added succesfully',
                'remember_token'=> $user->remember_token
            ]);
        }
        else
        {
            return response()->json([
                'status' => 404,
                'message' => "Email Allready exsit",
                'data'   => NULL

           ]);
        }


    }
    public function handleLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:100',
            'password' => 'required|string|max:50|min:5',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors);
        }
        $currentuser = $request->email;
        $is_user = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if(! $is_user)
        {
            return response()->json([
                'status' => 404,
                'message'  => "credentials are not correct",
                'data'   => NULL
            ]);
        }
        $user = User::where('email', '=', $request->email)->first();
        $new_access_token = Str::random(64);
        $user->update([
            'access_token' => $new_access_token
        ]);
            $userData = User::where('email', '=', $request->email)->first();
            $new_access_token = Str::random(64);
            $userData->update([
                'remember_token' => $new_access_token
            ]);
            return response()->json([
                'status'            =>200,
                'message'           =>'LOGGED IN SUCCESSFULY',
                "UserInfo"          => $userData,


        ]);
    }
    public function handleEmpLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nationalid' => 'required|numeric|min:14',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors);
        }
        $nationalidreq = employee::where('nationalid', '=', $request->nationalid)->first();
        if(! $nationalidreq)
        {
            return response()->json([
                'status' => 404,
                'message'  => "credentials are not correct",
                'data'   => NULL
            ]);
        }
        $user = employee::where('nationalid', '=', $request->nationalid)->first();
           if ($user) {
            return response()->json([
                'status'            =>200,
                'message'           =>'LOGGED IN SUCCESSFULY',
                "UserInfo"          => $user,
        ]);
           }

    }

 }
