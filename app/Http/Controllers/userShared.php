<?php

namespace App\Http\Controllers;

use App\Models\otp;
use App\Models\User;
use App\Mail\MailNotify;
use App\Models\feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class userShared extends Controller
{
    public function changePassword(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'oldPassword' => 'required|string',
            'newPassword' => 'required|string',
            'confirmPassword' => 'required|string',

        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors);
        }
        $Code = User::find($id);
       if ($Code) {
        if ($request->newPassword !== $request->confirmPassword) {
            return response()->json([
                "message" => 'password doesnot match',
            ]);
        }
        $Code->update([
            'password' =>Hash::make($request->newPassword),
        ]);
        return response()->json([
            'status'  => 200,
            "message" => 'Profile Updated Successfully',
            'data' => $Code

        ]);
       }
       else{
        return response()->json([
            'ERROR'  => 404,
            "message" => 'THIS ID NOT FOUND',
            'data' => null
        ]);
       }
    }
    public function EditProfile(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string',
            'name'  => 'required|string',
            'phone' => 'required|string',

        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors);
        }
        $Code = User::find($id);
       if ($Code) {
        $Code->update([
            'email' => $request->email,
            'name'  => $request->name,
            'phone' => $request->phone,
        ]);
        return response()->json([
            'status'  => 200,
            "message" => 'Profile Updated Successfully',
            'data' => $Code

        ]);
       }
       else{
        return response()->json([
            'ERROR'  => 404,
            "message" => 'THIS ID NOT FOUND',
            'data' => null
        ]);
       }
    }
    public function sendOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors);
        }
        $otps = otp::create([
            'email' => $request->email,
            'message' => $request->message
        ]);
        $useremail      = $request->email;
        $data=[
            'subject' => "ROAD VISION",
            'body'    => $request->message ,
        ];
        Mail::to($useremail)->send(new MailNotify($data));
        return response()->json([
           'status'   => "200",
           'message' => "New Otp Created Successfully",
           'data' => $otps,
        ]);


    }
    public function checkEmail(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:100',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors);
        }
        $user = User::where('email', '=', $request->email)->first();
        if(! $user)
        {
            return response()->json([
                'status' => 404,
                'message'  => "credentials are not correct",
                'data'   => NULL
            ]);
        }
        else
        {
            return response()->json([
                'status' => 200,
                'message'  => "This User Is Exist",
                'data'   => $user
            ]);
        }
    }
    public function sendFeedback(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'requestNumber'=> 'required|string|max:100',
                'desc'         => 'required|string|max:100',
                'rate'         => 'required|string|max:100',
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return response()->json($errors);
            }
            $feedback = feedback::create([
                'requestNumber' => $request->requestNumber,
                'desc'          => $request->desc,
                'rate'          => $request->rate
            ]);
            return response()->json([
                'status'  => 200,
                'message' => " Feedback Created Successfully",
                'data' => $feedback,

            ]);
        }
    public function getUserById($id){
        $user = User::find($id);
        return response()->json([
            'status'  => 200,
            "message" => 'Profile Updated Successfully',
            'data' => $user

        ]);
    }

}
