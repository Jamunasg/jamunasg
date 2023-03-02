<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model\km_cost;

class Km_CostController extends Controller
{
    
    public function create(Request $request)
    {
        $reqdata = $request->all();
        $row = new km_cost;
        $row->amount =  $reqdata["amount"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => " km_cost created successfully",
            "data" => $row
        ], 200);
    }
    public function list(Request $request)
    {
        return km_cost::get();
    }
    public function update(Request $request)
    {
        $reqdata = $request->all();
        $row = km_cost::find($reqdata["id"]);
        $row->amount =  $reqdata["amount"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => "km_cost updated successfully",
            "data" => $row
        ], 200);
    }
    public function delete($id, Request $request)
    {

        $row = km_cost::find($id);
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
