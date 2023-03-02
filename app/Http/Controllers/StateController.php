<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\state;

class StateController extends Controller
{
    
    public function create(Request $request)
    {
        $reqdata = $request->all();
        $row = new state;
        $row->state_name =  $reqdata["state_name"];
        $row->is_active =  $reqdata["is_active"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => " State created successfully",
            "data" => $row
        ], 200);
    }
    public function list(Request $request)
    {
        return state::get();
    }
    public function update(Request $request)
    {
        $reqdata = $request->all();
        $row = state::find($reqdata["id"]);
        $row->state_name =  $reqdata["state_name"];
        $row->is_active =  $reqdata["is_active"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => "State updated successfully",
            "data" => $row
        ], 200);
    }
    public function delete($id, Request $request)
    {

        $row = state::find($id);
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
