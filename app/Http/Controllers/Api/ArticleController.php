<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\NewsSysytemResource;

class ArticleController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $article = Article::find($id);

        if (!$article) {
            return  $this->notFound();
        }
        return $this->successResponse(new ArticleResource($article),'تم عرض المقالة بنجاح',200);
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
    public function getHtmlContent($id)
    {
        $article = Article::find($id);

        if (!$article) {
            return response()->json(['message' => 'Article not found'], 404);
        }

        $htmlContent = view('article')->with('article', $article)->render();

        // return response()->json(['html' => $htmlContent], 200)
        //     ->header('Content-Type', 'application/json');
        return response($htmlContent, 200)
            ->header('Content-Type', 'text/html');
        // return $this->successResponse($htmlContent,'Success Responce',200);
    }

    public function getNews()
    {
        $articles = Article::where('type', '1')->get();
        return $this->successResponse(NewsSysytemResource::collection($articles), "تم عرض اخر الاخبار بنجاح", 200);
    }
    public function getStudingSystems()
    {
        $articles = Article::where('type', '0')->get();
        return $this->successResponse(NewsSysytemResource::collection($articles), "تم عرض الانظمة الدراسية بنجاح", 200);
    }
}
