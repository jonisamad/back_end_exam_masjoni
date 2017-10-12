<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\UnitRumah; 

class Productcontroler extends Controller
{
    function CreateUnit (Request $req){

        try{
            //name, email, password
            // $this->validate($req,[
            //     'kavling' => 'required',
            //     'block' => 'required',
            //     'no_rumah' => 'required',
            // ]);

            $unit = new UnitRumah;
            $unit->kavling = $req->input('kavling');
            $unit->block = $req->input('block');
            $unit->no_rumah = $req->input('no_rumah');
            $unit->harga_rumah = $req->input('harga_rumah');
            $unit->luas_tanah = $req->input('luas_tanah');
            $unit->luas_bangunan = $req->input('luas_bangunan');
            $unit->save();

            return response()->json(['message' => 'Succsesfully Create Unit'],200);

        }
        
       catch(\Exception $e){
           return response()->json(['message' => 'failed to  Create Unit'], 500);
       }
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\UnitRumah; 

class Productcontroler extends Controller
{
    function CreateUnit (Request $req){

        try{
            //name, email, password
            // $this->validate($req,[
            //     'kavling' => 'required',
            //     'block' => 'required',
            //     'no_rumah' => 'required',
            // ]);

            $unit = new UnitRumah;
            $unit->kavling = $req->input('kavling');
            $unit->block = $req->input('block');
            $unit->no_rumah = $req->input('no_rumah');
            $unit->harga_rumah = $req->input('harga_rumah');
            $unit->luas_tanah = $req->input('luas_tanah');
            $unit->luas_bangunan = $req->input('luas_bangunan');
            $unit->save();

            return response()->json(['message' => 'Succsesfully Create Unit'],200);

        }
        
       catch(\Exception $e){
           return response()->json(['message' => 'failed to  Create Unit'], 500);
       }
    }

     function CreateUnit (Request $req){

        try{
            //name, email, password
            // $this->validate($req,[
            //     'kavling' => 'required',
            //     'block' => 'required',
            //     'no_rumah' => 'required',
            // ]);

            $unit = new UnitRumah;
            $unit->kavling = $req->input('kavling');
            $unit->block = $req->input('block');
            $unit->no_rumah = $req->input('no_rumah');
            $unit->harga_rumah = $req->input('harga_rumah');
            $unit->luas_tanah = $req->input('luas_tanah');
            $unit->luas_bangunan = $req->input('luas_bangunan');
            $unit->save();

            return response()->json(['message' => 'Succsesfully Create Unit'],200);

        }
        
       catch(\Exception $e){
           return response()->json(['message' => 'failed to  Create Unit'], 500);
       }
    }

     function CreateUnit (Request $req){

        try{
            //name, email, password
            // $this->validate($req,[
            //     'kavling' => 'required',
            //     'block' => 'required',
            //     'no_rumah' => 'required',
            // ]);

            $unit = new UnitRumah;
            $unit->kavling = $req->input('kavling');
            $unit->block = $req->input('block');
            $unit->no_rumah = $req->input('no_rumah');
            $unit->harga_rumah = $req->input('harga_rumah');
            $unit->luas_tanah = $req->input('luas_tanah');
            $unit->luas_bangunan = $req->input('luas_bangunan');
            $unit->save();

            return response()->json(['message' => 'Succsesfully Create Unit'],200);

        }
        
       catch(\Exception $e){
           return response()->json(['message' => 'failed to  Create Unit'], 500);
       }
    }

    function DeleteUnit(Request $req, $id) { 
        try { 
            $deleted = DB::delete( 
                'delete from unit_rumahs 
                where id = :id ', ['id' => $id] 
            ); 

            return response()->json(['message' => 'Unit Successfully Deleted'], 200); 
        } 
        catch(\Exception $e){ 
            return response()->json(['message' => 'Unit Failed to Delete, exception: ' + $e], 500); 
        } 
    }

    
}
