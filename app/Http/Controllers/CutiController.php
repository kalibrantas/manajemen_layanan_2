<?php

namespace App\Http\Controllers;

use App\Cuti;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function showAll()
    {
        return response()->json(Cuti::all());
    }

    public function showOne($id)
    {
        return response()->json(Cuti::find($id));
    }

    public function create(Request $request)
    {
        $author = Cuti::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = Cuti::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Cuti::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
