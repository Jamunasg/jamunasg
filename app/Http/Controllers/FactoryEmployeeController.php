<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model\factoryemployee;

class FactoryEmployeeController extends Controller
{
    public function create(Request $request)
    {
        $reqdata = $request->all();
        $row = new factoryemployee;
        $row->factory_id =  $reqdata["factory_id"];
        $row->employee_id =  $reqdata["employee_id"];
        $row->Role =  $reqdata["Role"];
        $row->is_active =  $reqdata["is_active"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => " factoryemployee created successfully",
            "data" => $row
        ], 200);
    }
    public function list(Request $request)
    {
        return factoryemployee::get();
    }
    public function update(Request $request)
    {
        $reqdata = $request->all();
        $row = factoryemployee::find($reqdata["id"]);
        $row->factory_id =  $reqdata["factory_id"];
        $row->employee_id =  $reqdata["employee_id"];
        $row->Role =  $reqdata["Role"];
        $row->is_active =  $reqdata["is_active"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => "factoryemployee updated successfully",
            "data" => $row
        ], 200);
    }
    public function delete($id, Request $request)
    {

        $row = factoryemployee::find($id);
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
