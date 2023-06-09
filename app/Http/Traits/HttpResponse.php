<?php

namespace App\Http\Traits;

trait HttpResponse
{
    public static function success($message):\Illuminate\Http\Response
    {
        return response([
            'success'=>true,
            'message'=>$message,
        ],200);
    }

    public static function failure($message,$status):\Illuminate\Http\Response
    {
        return response([
            'success'=>false,
            'message'=>$message,
        ],$status);
    }

    public static function returnData($key, $value, $message = ""): \Illuminate\Http\Response
    {
        return response([
            'success' => true,
            'message' => $message,
            $key => $value
        ],200);
    }
}
