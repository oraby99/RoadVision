<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    public function sendFile(Request $request){
        $validator = Validator::make($request->all(), [
            'lat'          => 'required|string',
            'long'         => 'required|string',
            'date'         => 'required|string',
            'employee_id'  => 'required',
            'size'         => 'required',

        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors);
        }
            $mainImage = $request->file('mainImage');
            $ext = $mainImage->getClientOriginalExtension();
            $mainImagename = asset('public/uploadsMedia/' ."roadVision-". uniqid() . ".$ext" );
            $mainImage->move( public_path('uploadsMedia') , $mainImagename);

            $imageDetected = $request->file('imageDetected');
            $ext = $imageDetected->getClientOriginalExtension();
            $imageDetectedname = asset('public/uploadsMedia/' ."roadVision-". uniqid() . ".$ext" );
            $imageDetected->move( public_path('uploadsMedia') , $imageDetectedname);

            $video = $request->file('video');
            $ext = $video->getClientOriginalExtension();
            $videoname = asset('public/uploadsMedia/' ."roadVision-". uniqid() . ".$ext" );
            $video->move( public_path('uploadsMedia') , $videoname);

            $report = test::create([
                'lat'           => $request->lat,
                'long'          => $request->long,
                'employee_id'   => $request->employee_id,
                'date'          => $request->date,
                'size'         => $request->size,
                'mainImage'     => $mainImagename,
                'imageDetected' => $imageDetectedname,
                'video'         => $videoname,

            ]);
            return response()->json([
                'status'  => 200,
                'message' => "THIS FILE Added Successfully",
                'data'    =>  $report

            ]);
    }
    public function getFiletById($id)
    {
        $report   = test::where('employee_id','=' , $id)->get();
        $Code = employee::find($id);
        if ($Code) {
            return response()->json([
                'status'            =>200,
                'message'           =>'File Informations',
                "RepoprtInfo"          => $report,
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
    public function deletefile($id)
    {
        $employee = employee::find($id);
        if ($employee->test) {
            foreach ($employee->test as $file) {
                $employee->test->where('employee_id',$id)->delete();
                }
                    return response()->json([
                    'status'  => 200,
                    'message' => "File deleted Successfully",
                ]);
            }
            else{
                return response()->json(['error'=>'This id not found'],401);
            }
    }

}
