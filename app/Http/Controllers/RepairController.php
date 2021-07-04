<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class RepairController extends Controller
{
    public function storeProblem(Request $request) {
        $Name = $request->input('Name');
        $Email = $request->input('Email');
        $Cell = $request ->input('Cell');
        $Address = $request ->input('Address');
        $Message = $request->input('Message');
        
        DB::table('repair')->insert(array(
            array("Name"=>"$Name", "Email"=>"$Email", "Cell"=>"$Cell", "Address" =>"$Address", "Message"=>"$Message")
        ));
                return redirect('/Message');
    }
    

    public function CloseMessage()
    {
        return redirect('/index');
    }
}
        
        // public function getUser(Request $request) {
        //     $uname = $request->input('Username');
        //     $pass = $request->input('Password');
    
        //     $loginData = DB::select('select Password from users where UserName = ?', [$uname]); 
         
        //     if (count($loginData) > 0){
                
        //         foreach ($loginData as $tablepass) {
    
        //             if (($tablepass->Password) == $pass){
        //                 return redirect('/Services');
        //             }
        //             else{
        //                 $error='Password does not match';
        //                 return view('/Login')->with('error',$error);
        //             }
        //         }
        //     }
        // }
