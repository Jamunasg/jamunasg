<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\factorymaster;

class FactoryMasterController extends Controller
{
    public function create(Request $request)
    {
        $reqdata = $request->all();
        $row = new factorymaster;
        $row->factory_name =  $reqdata["factory_name"];
        $row->factory_location_gps =  $reqdata["factory_location_gps"];
        $row->x_latitude =  $reqdata["x_latitude"];
        $row->y_longitude =  $reqdata["y_longitude"];
        $row->is_active =  $reqdata["is_active"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => " factorymaster created successfully",
            "data" => $row
        ], 200);
    }
    public function list(Request $request)
    {
        return factorymaster::get();
    }
    public function update(Request $request)
    {
        $reqdata = $request->all();
        $row = factorymaster::find($reqdata["id"]);
        $row->factory_name =  $reqdata["factory_name"];
        $row->factory_location_gps =  $reqdata["factory_location_gps"];
        $row->x_latitude =  $reqdata["x_latitude"];
        $row->y_longitude =  $reqdata["y_longitude"];
        $row->is_active =  $reqdata["is_active"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => "factorymaster updated successfully",
            "data" => $row
        ], 200);
    }
    public function delete($id, Request $request)
    {

        $row = factorymaster::find($id);
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
