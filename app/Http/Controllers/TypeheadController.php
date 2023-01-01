<?php

namespace App\Http\Controllers;
use App\Models\Answer;
use Illuminate\Http\Request;

class TypeheadController extends Controller
{
    public function autocompleteSeach(Request $request)
    {
        $query = $request->get('query');
        $filterResult = Answer::where('topic', 'LIKE', '%'.$query.'%')->get();
        return resposnse()->json($filterResult);
    }
}
