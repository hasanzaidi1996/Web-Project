<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Contracts\Session\Session;

Session();


class UserController extends Controller
{
    public function storeUser(Request $request) {
        $Name = $request->input('Name');
        $UserName = $request->input('Username');
        $Email = $request->input('Email');
        $Password = $request->input('Password');
        $CPassword = $request->input('CPassword');

        $loginData = DB::select('select Id from users where UserName = ?', [$UserName]);
        if (count($loginData) > 0){
            $error='User Exists';
            return view('/Register')->with('error',$error);
        }
        else {

            $loginID = DB::table('users')->insertGetId(
                array("Name"=>"$Name","UserName"=>"$UserName","Email"=>"$Email","Password"=>"$Password", "CPassword"=>"$CPassword")
            );
    
            // DB::table('users')->insert(array(
            //     array("Name"=>"$Name","UserName"=>"$UserName","Email"=>"$Email","Password"=>"$Password", "CPassword"=>"$CPassword")
            // ));
    
            // $request->Session()->put('user', $loginID);
            return redirect('/Login');
        }   
    }
        
    public function getUser(Request $request) {
        $uname = $request->input('Username');
        $pass = $request->input('Password');

        $loginData = DB::select('select Password from users where UserName = ?', [$uname]); 
        // $loginID = DB::select('select Id from users where UserName = ?', [$uname]);
        $loginID = User::where(['UserName' => $request->Username])->first();

        if (count($loginData) > 0){
            
            foreach ($loginData as $tablepass) {

                if (($tablepass->Password) == $pass){
                    
                    $request->Session()->put('user', $loginID);
                    $time = time() + 120;
                    if(!empty($_POST["remember"])) {
                        setcookie("username", $_POST["Username"], $time);
                        setcookie("password", $_POST["Password"], $time);
                    }
                    return redirect('/Services');
                    // return $loginID->UserName;
                }
                else{
                    $error='Password does not match';
                    return view('/Login')->with('error',$error);
                }
            }
        } else {
            return redirect('/InvalidLogin');
        }
    }
}