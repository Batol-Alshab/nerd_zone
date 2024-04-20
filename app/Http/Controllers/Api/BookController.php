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
        return $this->successresponse(BookResource::collection($book_url), 'Book  index Successfully', 200);
    }


    public function store(Request $request)
    {
        try{
        $validatedData = $request->validate([
            'name' => 'required|string',
            'url' => 'required|mimes:pdf,doc,docx,txt|max:10240',
            'material_id' => 'required|exists:materials,id'
        ]);
        $path = $this->uploadFile($request, 'file/', 'books/');
        $book = Book_url::create([
            'name' => $request->name,
            'url' => $request->url,
            'material_id' => $request->material_id
        ]);

        return $this->successresponse(new BookResource($book), 'Book store Successfully!',201);
    }catch (\Exception $e) {
        return $this->errorResponse('the book is not store', 500);
    }
    }


    public function show(string $id)
    {
        try{
            $book = Book_url::find($id);
            if($book){            
                return $this->successresponse(new BookResource($book), 'Book show successfully', 200);
            }else{
                return $this->errorResponse('the Book is not found ', 404);
            }
        }catch (\Exception $e) {
            return $this->errorResponse('Failed to show Book', 500);
        }
    }


    public function update(Request $request, $id)
    {
        try{
            $book=Book_url::find($id);
            if($request->url )
            {
                $path=$this->uploadFile($request,'file/','books/');
            }
            if ($book)
            {
                $book->update([
                    'name'=>($request->name) ? $request->name : $book->name,
                    'url'=>($request->url) ? $request->url : $book->url,
                    'material_id'=>($request->material_id) ? $request->material_id : $book->material_id
                ]);
                return $this->successresponse(new BookResource($book), 'Book updated Successfully!', 200);   
            }
            else{
                return $this->errorResponse('the book not found',404);
            }
    }catch(\Exception $e){
            return $this->errorResponse('Failed to update Book',500);
        }
    }


    public function destroy(string $id)
    {
        try{
            $book=Book_url::find($id);
            if($book){
                $book->delete();
                return $this->successResponse(null,'Book has been deleted successfully.');
            }else {
                return $this->errorResponse('the Book not found',404);
            }
        }catch(\Exception $e){
            return $this->errorResponse('Failed to destroy Book',500);
        }
    }


    public function get_material_book($material_id)
    {
        $book = Book_url::where('material_id', $material_id)->get();
        return $this->successresponse(BookResource::collection($book), 'success reply', 200);

    }

}
