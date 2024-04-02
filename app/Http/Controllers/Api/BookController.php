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
        return $this->successresponse(BookResource::collection($book_url), 'Book  Showed Successfully', 200);

        // return $this->successResponse($book_url, 'Book  Showed Successfully');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'url' => 'required|mimes:pdf,doc,docx,txt|max:10240',
            'material_id' => 'required|exists:materials,id'
        ]);
        // $uploadedFile = $request->file('book_url');
        // $filePath = $uploadedFile->store('books', 'public');
        $path = $this->uploadFile($request, 'book_url', 'books');
        $book = Book_url::create([
            'name' => $request->name,
            'url' => $path,
            'material_id' => $request->material_id
        ]);


        return $this->successResponse($book, 'Book  store Successfully', 201);
    }


    public function show($id)
    {
        $book_url = Book_url::find($id);
        return $this->successResponse($book_url, 'show  Book Successfully');
    }


    public function update(Request $request, $id)
    {
        $book_url = Book_url::find($id);
        $validatedData = $request->validate([
            'name' => 'required|string',
            'url' => 'required|mimes:pdf,doc,docx,txt|max:10240',
            'material_id' => 'required|exists:materials,id'
        ]);
        $book_url->update($validatedData);
        return $this->successResponse($book_url, 'Book has been updated successfully.');
    }


    public function destroy(string $id)
    {
        $book_url = Book_url::find($id);
        $book_url->delete();
        return $this->successResponse(null, 'Book has been deleted successfully.');
    }


    public function get_material_book($material_id)
    {
        $book = Book_url::where('material_id', $material_id)->get();
        //  return $this->successResponse($book, 'success reply', 200);
        return $this->successresponse(BookResource::collection($book), 'success reply', 200);

    }

}
