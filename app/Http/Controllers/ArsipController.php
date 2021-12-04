<?php
    namespace App\Http\Controllers;

    use App\Arsip;
    use Illuminate\Http\Request;

    class ArsipController extends Controller{
        
        public function showOne($id){
            return response()->json(Arsip::find($id));
        }

        public function file($name){
            return response()->download(storage_path()."/arsip/".$name);
        }
        public function showAll(){
           
            return response()->json(Arsip::all());
        }
        public function create(Request $request){            
            $this->validate($request, [
                'id_pegawai' => 'exists:ldp_pegawai,id',
            ]);
    
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $name = $request->id_pegawai."_".time().'.'.$file->getClientOriginalExtension();
                $filename = $file->getClientOriginalExtension();
                $file->move(storage_path()."/arsip",$name);
                Arsip::create([
                    'id_pegawai'=>$request->id_pegawai, 
                    'id_jenis_arsip'=>$request->id_jenis_arsip,
                    'nama_arsip'=> $filename, 
                    'file'=> $name,
                    'url'=> url("layanan_data_pegawai/arsip/file/".$name)
                ]);
                return response()->json(['data'=>"File is uploaded"]);
            }
            return $request->file('file');
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
