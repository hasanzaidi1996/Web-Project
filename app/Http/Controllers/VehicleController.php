<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\vehicle;
use Illuminate\Contracts\Session\Session;

class VehicleController extends Controller
{
    public function StoreSelling(Request $req) {
        // return $req->input();
        // return Session()->get('user');
        if($req->Session()->has('user')) {
            // return Session()->get('user')["Id"];
            // $vehicle = new vehicle();
            // $vehicle->userID = $req->Session()->get('user')['Id'];
            // // return $req->Session()->get('user')['Id'];
            // $vehicle->Title = $req->title;
            // $vehicle->Distcription = $req->discription;
            // $vehicle->Year = $req->year;
            // $vehicle->Millage = $req->millage;
            // $vehicle->Make = $req->make;
            // $vehicle->Fuel_Type = $req->fuel_type;
            // $vehicle->Reg_year = $req->reg_year;
            // $vehicle->conditions = $req->condition;
            // $vehicle->Price = $req->price;
            // $vehicle->Image = $req->image;
            // $vehicle->Location = $req->location;
            // $vehicle->Name = $req->name;
            // $vehicle->Contact = $req->number;
            // $vehicle->save();
            // $userID= Session()->get('user');
                $userID=$req->Session()->get('user')['Id'];
                $Title = $req->input('title');
                $Distcription = $req->input('discription');
                $Year = $req ->input('year');
                $Millage = $req ->input('millage');
                $Make = $req->input('make');
                $Fuel_Type = $req ->input('fuel_type');
                $Reg_year = $req ->input('reg_year');
                $condition = $req->input('condition');
                $Price = $req ->input('price');
                $Image = $req ->input('image');
                $Location = $req ->input('location');
                $Name = $req->input('name');
                $Contact = $req->input('number');
                DB::table('vehicles')->insert(array(
                    array("userID"=>"$userID", "Title"=>"$Title", "Distcription"=>"$Distcription", "Year" =>"$Year", "Millage"=>"$Millage",
                    "Make"=>"$Make", "Fuel_Type" =>"$Fuel_Type", "Reg_year"=>"$Reg_year", "condition"=>"$condition", "Price" =>"$Price", "Image"=>"$Image", "Location"=>"$Location", "Name" =>"$Name", "Contact"=>"$Contact")
                ));   
            return redirect('/index');
        } else {
            return redirect('/Login');
        }
    }
    public function getVehicle() {
        $vehicles = vehicle::get();
        return view('Buying', ['vehicles' => $vehicles]);
    }

    public function viewDetials($id) {
        $vehicles = vehicle::where('id', '=', $id)->get();
        return view('ViewVehicle', ['vehicles' => $vehicles]);
    }

    public function viewAds() {
        if(Session()->has('user')) {
            $user = Session()->get('user');
            if($user != NULL) {
                $vehicles = vehicle::where('userID', '=', $user->Id)->get();
                return view('ViewMyAds', ['ads' => $vehicles]);
            } else {
                return redirect('/Selling');
            }
        } else {
            return redirect('/Login');
        }
    }

    public function adID($id){
        Session()->put('adID', $id);
        return redirect('/UpdateSelling');
    }

    public function editAd(Request $req) {
        $adID=Session()->get('adID');
        $Title = $req->input('title');
        $Distcription = $req->input('discription');
        $Year = $req ->input('year');
        $Millage = $req ->input('millage');
        $Make = $req->input('make');
        $Fuel_Type = $req ->input('fuel_type');
        $Reg_year = $req ->input('reg_year');
        $Price = $req ->input('price');
        $Image = $req ->input('image');
        $Location = $req ->input('location');
        $Name = $req->input('name');
        $Contact = $req->input('number');

        DB::update('update vehicles set Title = ?, Distcription = ?, Year = ?, Millage = ?, 
        Make = ?, Fuel_Type = ?, Reg_year = ?, Price = ?, Image = ?, Location = ?,
        Name = ?, Contact = ? where id = ?', [$Title, $Distcription, $Year, $Millage, $Make, $Fuel_Type, $Reg_year, $Price, $Image, $Location, $Name, $Contact, $adID]);
        // return $userID;
        return redirect('/Services');
        // return $adID;
    }

    public function deleteUserAd($id) {
        // vehicle::destroy($id);
        DB::table('vehicles')->where('id', $id)->delete();
        return redirect('/ViewAds');
        // return $id;
    }
    function productSuggestions() {
        $searchTerm = request('item');
        if(strlen($searchTerm) > 0) {
            $results = DB::select(DB::raw("select Title from vehicles where Title like '$searchTerm%'"));
            return response($results);
        } 
    }
}