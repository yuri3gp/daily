<?php

namespace App\Http\Controllers;

use App\Http\Requests\KeywordRequest;
use App\Models\Keyword;

class KeywordController extends Controller
{
    public function index()
    {
        return Keyword::all();
    }
    public function show($id)
    {
        return Keyword::find($id);
    }
    public function destroy($id)
    {
        return Keyword::destoy($id);
    }
    public function update(KeywordRequest $request,$id)
    {
        $keyword = Keyword::find($id);
        $keyword->word = $request->input("word");
        return $keyword->save();
    }
    public function store(KeywordRequest $request)
    {
        $keyword = new Keyword();
        $keyword->word = $request->input("word");
        return $keyword->save();
    }
}