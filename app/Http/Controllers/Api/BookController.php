<?php

namespace App\Http\Controllers\Api;

use App\Models\Book_url;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use App\Http\Controllers\Api\FileUploader;

class BookController extends Controller
{
    use ApiResponse;
    use FileUploader;
    public function index()
    {
        $book_url = Book_url::all();
        return $this->successResponse(BookResource::collection($book_url), 'تم عرض كل الكتب بنجاح', 200);
    }


    public function store(Request $request)
    {
        try{
        $validatedData = $request->validate([
            'name' => 'required|string',
            'url' => 'required|mimes:pdf|max:10240',
            'material_id' => 'required|exists:materials,id'
        ]);
        $path = $this->uploadFile($request, 'file/', 'books/');
        $book = Book_url::create([
            'name' => $request->name,
            'url' =>  $path,
            'material_id' => $request->material_id
        ]);

        return $this->successResponse(new BookResource($book), 'تم إضافة كتاب بنجاح',201);
        }catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 400);
        }
    }

    public function show(string $id)
    {
        try{
            $book = Book_url::find($id);
            if($book){            
                return $this->successResponse(new BookResource($book), 'تم عرض الكتاب بنجاح', 200);
            }else{
                return $this->errorResponse('الكتاب الذي تبحث عنه غير موجود', 404);
            }
        }catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 400);
        }
    }


    public function update(Request $request, $id)
    {
        try{
            $book=Book_url::find($id);
            if ($book)
            {
                $validatedData = $request->validate([
                    'name' => 'nullable|string',
                    'url' => 'nullable|mimes:pdf|max:10240',
                    'material_id' => 'nullable|exists:materials,id'
                ]);
                $path=$this->uploadFile($request,'file/','books/');
                $book->update([
                    'name'=>($request->name) ? $request->name : $book->name,
                    'url'=>($request->url) ?  $path : $book->url,
                    'material_id'=>($request->material_id) ? $request->material_id : $book->material_id
                ]);
                return $this->successResponse(new BookResource($book), 'تم تعديل الكتاب بنجاح', 200);   
            }
            else{
                return $this->errorResponse('الكتاب الذي تبحث عنه غير موجود',404);
            }
        }catch(\Exception $e){
            return $this->errorResponse($e->getMessage(),400);
        }
    }

    public function destroy(string $id)
    {
        try{
            $book=Book_url::find($id);
            if($book){
                $book->delete();
                return $this->successResponse(null,'تم حذف الكتاب بنجاح');
            }else {
                return $this->errorResponse('الكتاب الذي تبحث عنه غير موجود',404);
            }
        }catch(\Exception $e){
            return $this->errorResponse($e->getMessage(),400);
        }
    }

    public function get_material_book($material_id)
    {
        $book = Book_url::where('material_id', $material_id)->get();
        return $this->successResponse(BookResource::collection($book), 'تم عرض كل كتب المادة', 200);
    }

}
