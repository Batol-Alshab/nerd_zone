<?php

namespace App\Http\Controllers\Api;

trait ApiResponse
{

    // public function successResponse($data, $token , $message , $code=200 )
    // {
    //     return response()->json([
    //         'data' => $data,
    //         'status' => true,
    //         'message' => $message,
    //         'authorisation' => [
    //             'token' => $token,
    //             'type' => 'bearer'
    //         ]

    //     ], $code);
    // }

    public function successResponse($data, $message = null, $code = 200)
    {
        return response()->json([
            'data' => $data,
            'status' => true,
            'message' => $message

        ], $code);
    }


    public function errorResponse($message = null, $code = 400)
    {

        return response()->json([
            'status' => false,
            'message' => $message

        ], $code);
    }
    public function badRequest($message= 'Bad Request')
    {
        return response()->json([
            'status' => false,
            'message' =>$message

        ],400);
    }
    public function unauthorized($message= 'Unauthorized')
    {
        return response()->json([
            'status' => false,
            'message' =>$message

        ],403);
    }

    public function unauthenticated($message= 'Unauthenticated')
    {
        return response()->json([
            'status' => false,
            'message' =>$message

        ],401);
    }
    public function notFound($message= 'Not Found')
    {
        return response()->json([
            'status' => false,
            'message' =>$message

        ],404);
    }
    public function serverError($message= 'Server Error')
    {
        return response()->json([
            'status' => false,
            'message' =>$message

        ],500);
    }

}
