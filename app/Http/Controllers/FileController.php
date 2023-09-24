<?php

namespace App\Http\Controllers;

use App\Models\file;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FileController extends Controller
{
    public function sendFile(Request $request){
        $validator = Validator::make($request->all(), [
            'lat'          => 'required|string',
            'long'         => 'required|string',
            'sevirity_id'  => 'required|numeric',
            'date'         => 'required|string',
            'demageTypes'  => 'required|string',
            'potholeTypes' => 'required|string',
            'potholeWidth' => 'required|string',
            'potholeHeight'=> 'required|string',
            'potholeScores'=> 'required|string',
            'address'      => 'required|string',
            'user_id'      => 'required',
            'priority'     => 'required',
            'Solution'     => 'required',
            'Material'     => 'required',
            'Cost'         => 'required',

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

            $report = file::create([
                'lat'           => $request->lat,
                'long'          => $request->long,
                'sevirity_id'   => $request->sevirity_id,
                'date'          => $request->date,
                'address'       => $request->address,
                'demageTypes'    => $request->demageTypes,
                'potholeTypes'   => $request->potholeTypes,
                'potholeWidth'  => $request->potholeWidth,
                'potholeHeight' => $request->potholeHeight,
                'potholeScores'  => $request->potholeScores,
                'mainImage'     => $mainImagename,
                'imageDetected' => $imageDetectedname,
                'video'         => $videoname,
                'user_id'  => $request->user_id,
                'priority'  => $request->priority,
                'Solution'  => $request->Solution,
                'Material'  => $request->Material,
                'Cost'  => $request->Cost,

            ]);
            return response()->json([
                'status'  => 200,
                'message' => "THIS FILE Added Successfully",
                'data'    =>  $report

            ]);
    }
    public function getFiletById($id)
    {
        $report   = file::where('user_id','=' , $id)->get();
        $Code = User::find($id);
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
}
