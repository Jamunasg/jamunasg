<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\districtmaster;

class DistrictMasterController extends Controller
{
    public function create(Request $request)
    {
        $reqdata = $request->all();
        $row = new districtmaster;
        $row->state_id =  $reqdata["state_id"];
        $row->district_name =  $reqdata["district_name"];
        $row->is_active =  $reqdata["is_active"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => " districtmaster created successfully",
            "data" => $row
        ], 200);
    }
    public function list(Request $request)
    {
        return districtmaster::get();
    }
    public function update(Request $request)
    {
        $reqdata = $request->all();
        $row = districtmaster::find($reqdata["id"]);
        $row->state_id =  $reqdata["state_id"];
        $row->district_name =  $reqdata["district_name"];
        $row->is_active =  $reqdata["is_active"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => "districtmaster updated successfully",
            "data" => $row
        ], 200);
    }
    public function delete($id, Request $request)
    {

        $row = districtmaster::find($id);
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
