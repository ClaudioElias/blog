<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;

class ArticlesController extends Controller
{
    public function index()
    {
        $search = request('search');
        if ($search) {
            $articles = Articles::where([
                ['title', 'like', "%{$search}%"]
            ])->paginate(10);
        }else{
            $articles = Articles::paginate(10);
        }
        return view ('blog/articles', [
            'articles' => $articles,
            'search' => $search
        ]);
    }

    public function detail($id)
    {
        $article = Articles::where('id', $id)->orderBy('id', 'desc')->limit(4)->firstOrFail();
        $others = Articles::whereNot('id', $id)->orderBy('id', 'desc')->limit(4)->get();
        return view ('blog/article', [
            'article' => $article,
            'others' => $others
        ]);
    }
}
