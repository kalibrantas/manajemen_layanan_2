<?php

namespace App\Http\Controllers;

use App\CapaianBulanan;
use Illuminate\Http\Request;

class CapaianBulananController extends Controller
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
        return response()->json(CapaianBulanan::all());
    }

    public function showOne($id)
    {
        return response()->json(CapaianBulanan::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'id_pegawai' => 'exists:ldp_pegawai,id',
        ]);

        $author = CapaianBulanan::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = CapaianBulanan::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        CapaianBulanan::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
