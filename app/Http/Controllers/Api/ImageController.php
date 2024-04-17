<?php

namespace App\Http\Controllers\Api;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    use apiResponse;
    use FileUploader;
    /**
     * Display a listing of the resource.
     */
    public function upload(Request $request)
    {
        // $image->move(public_path('images',$name));
            // $name= asset($name);
        // if($request->hasFile('image'))
        // {
        //     $image = $request->file('image');
        //     $name =  time() . '_' . $image->getClientOriginalName();
        //     $image->move('images/',$name);
        //     $name= asset('images/'.$name);
        //     Image::create(['name'=>$name]);
        //     return response()->json(['success'=>'Upload successfully']);

        // }
        if($request->hasFile('image'))
        {
        $path = $this->uploadAll($request, 'images/','material_image/');
        $book = Image::create([
            'name' => $request->image,
        ]);
        return response()->json(['success'=>'Upload successfully']);
        }

        return response()->json('Upload error');
    }
    public function index()
    {

        return response()->json(
            Image::all()
            
        );
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
