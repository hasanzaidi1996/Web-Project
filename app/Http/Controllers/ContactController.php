<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class ContactController extends Controller
{
    public function storeContact(Request $request) {
        $FName = $request->input('FirstName');
        $LName = $request->input('LastName');
        $Cell = $request ->input('Cell');
        $Email = $request->input('Email');
        $Message = $request->input('Message');
        
        DB::table('contact')->insert(array(
            array("First_Name"=>"$FName","Las_Name"=>"$LName","Cell"=>"$Cell","Email"=>"$Email", "Message"=>"$Message")
        ));
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
