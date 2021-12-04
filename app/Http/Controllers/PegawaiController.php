<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{

    // public function showPegawaiByNip($nip){
    //     return response()->json(Pegawai::select('*')->where('nip', $nip)->get());
    // }

    public function showOne($id)
    {
        return response()->json(Pegawai::find($id));
    }
    public function showAll()
    {
        return response()->json(Pegawai::all());
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'nip' => 'required',
            'nama' => 'required',
            'pangkat' => 'required',
            'golongan' => 'required',
            'jenjang_jabatan' => 'required',
            'nama_jabatan' => 'required',
            'unit_kerja' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'status' => 'required'
        ]);

        $author = Pegawai::create($request->all());
        return response()->json($author, 201);
    }
    public function update($id, Request $request)
    {
        $author = Pegawai::findOrFail($id);
        $author->update($request->all());
        return response()->json($author, 200);
    }
    public function delete($id)
    {
        Pegawai::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
