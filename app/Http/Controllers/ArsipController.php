<?php
    namespace App\Http\Controllers;

    use App\Arsip;
    use Illuminate\Http\Request;

    class ArsipController extends Controller{
        
        public function showOnePegawai($id){
            return response()->json(Arsip::find($id));
        }
        public function show(){
            return response()->json(Arsip::all());
        }
        public function create(Request $request){            
            $author = Arsip::create($request->all());
            return response()->json($author, 201);
        }
        public function update($id, Request $request){
            $author = Arsip::findOrFail($id);
            $author->update($request->all());
            return response()->json($author, 200);
        }
        public function delete($id){
            Arsip::findOrFail($id)->delete();
            return response('Deleted Successfully', 200);
        }
    }

?>