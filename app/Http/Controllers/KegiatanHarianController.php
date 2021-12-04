<?php

namespace App\Http\Controllers;

use App\KegiatanHarian;
use Illuminate\Http\Request;

class KegiatanHarianController extends Controller
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
        return response()->json(KegiatanHarian::all());
    }

    public function showOne($id)
    {
        return response()->json(KegiatanHarian::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'id_pegawai' => 'exists:ldp_pegawai,id',
        ]);

        
        $author = KegiatanHarian::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = KegiatanHarian::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        KegiatanHarian::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
