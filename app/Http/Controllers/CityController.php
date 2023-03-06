<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\city;

class CityController extends Controller
{
    public function create(Request $request)
    {
        $reqdata = $request->all();
        $row = new city;
        $row->state_id =  $reqdata["state_id"];
        $row->district_id =  $reqdata["district_id"];
        $row->city_name =  $reqdata["city_name"];
        $row->is_active =  $reqdata["is_active"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => " city created successfully",
            "data" => $row
        ], 200);
    }
    public function list(Request $request)
    {
        return city::get();
    }
    // public function liststate_id($id,Request $request)
    // {

    //     return city::where('state_id', $id)->get();
    // }
    
    // public function listdistrict_id($id,Request $request)
    // {
    //     return city::where('district_id', $id)->get();
    // }
    
    public function getstate($id, Request $request)
    {
        // $result = admincreating::with('sitetypeinfo','slotdate')->get();
        $result = state::with('stateinfo')->where('state_id',$id)->orderBy('id')->get();
        return $result;
    }
    

    public function update(Request $request)
    {
        $reqdata = $request->all();
        $row = city::find($reqdata["id"]);
        $row->state_id =  $reqdata["state_id"];
        $row->district_id =  $reqdata["district_id"];
        $row->city_name =  $reqdata["city_name"];
        $row->is_active =  $reqdata["is_active"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => "city updated successfully",
            "data" => $row
        ], 200);
    }
    public function delete($id, Request $request)
    {

        $row = city::find($id);
        if($row){
            $row->delete();
            return response()->json([
                "status" => true,
                "message" => "event deleted successfully",
                "data" => $row
            ], 200);
        }
        else{
            return response()->json([
                "status" => false,
                "message" => "event already  deleted ",
                "data" => $row
            ], 200);
        }
    }

}
