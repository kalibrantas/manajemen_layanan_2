<?php

namespace App\Http\Controllers;

use App\Presensi;
use Illuminate\Http\Request;

class PresensiController extends Controller
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
        return response()->json(Presensi::all());
    }

    public function showOne($id)
    {
        return response()->json(Presensi::find($id));
    }

    public function create(Request $request)
    {
        $author = Presensi::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = Presensi::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Presensi::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
