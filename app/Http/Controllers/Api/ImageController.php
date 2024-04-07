<?php

namespace App\Http\Controllers\Api;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{use apiResponse;
    /**
     * Display a listing of the resource.
     */
    public function upload(Request $request)
    {
        // $image->move(public_path('images',$name));
            // $name= asset($name);
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $name =  time() . '_' . $image->getClientOriginalName();
            $image->move('images/',$name);
            // $name= asset('images/1712430218_t1.png');
            Image::create(['name'=>$name]);
            // return response()->json(['success'=>'Upload successfully']);
            return $this->successResponse(Image::all(), 'getting user information successfully', 200);

        }
        return response()->json('Upload error');
    }
    public function index()
    {
        return $this->successResponse(Image::all(), 'getting user information successfully', 200);

        // return response()->json(
        //     Image::all()
            
        // );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
