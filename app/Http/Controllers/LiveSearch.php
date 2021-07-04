<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiveSearch extends Controller
{
    function index()
    {
     return view('Buying');
    }
    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
        $data = DB::table('vehicles')
          ->where('Title', 'like', '%'.$query.'%')
          ->get();
      }
      else
      {
       $data = DB::table('vehicles')->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
        foreach($data as $row)
        {
          $output .= '<div class="col-md-4">
                        <div class="card zoom">
                          <div class="card-body"> 
                            <a href="#"> <img src=images/'.$row->Image.' style="width: 100%;"></a>
                            <a href="#" style="color: black;"><b>' .$row->Title. '</b></a>
                            <p style="color: red;"><b>Rs. ' .$row->Price. '</b></p>
                            <a class="btn btn-primary w-100" href=VehicleDetails/'.$row->id.'> View Details</a>
                          </div>
                        </div>
                      </div> <br> ';
        }
      }
      else
      {
        $output = '<h3 style="text-align: center">No Data Found!</h3>';
      }
      $data = array(
        'table_data'  => $output,
        'total_data'  => $total_row
      );

      echo json_encode($data);
      }
    } 
}
