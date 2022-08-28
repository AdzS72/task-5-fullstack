<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{
    public function index()
    {
        return Articles::all();
    }
 
    public function show($id)
    {
        return Articles::find($id);
    }

    public function store(Request $request)
    {
        return Articles::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $articles = Articles::findOrFail($id);
        $articles->update($request->all());

        return $articles;
    }

    public function delete(Request $request, $id)
    {
        $articles = Articles::findOrFail($id);
        $articles->delete();

        return 204;
    }
}
