<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model\factoryemployeeincentive;

class FactoryEmployeeIncentiveController extends Controller
{
    public function create(Request $request)
    {
        $reqdata = $request->all();
        $row = new factoryemployeeincentive;
        $row->factory_employee_id =  $reqdata["factory_employee_id"];
        $row->year =  $reqdata["year"];
        $row->month =  $reqdata["month"];
        $row->incentive_unit =  $reqdata["incentive_unit"];
        $row->incentive_amount =  $reqdata["incentive_amount"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => " factoryemployeeincentive created successfully",
            "data" => $row
        ], 200);
    }
    public function list(Request $request)
    {
        return factoryemployeeincentive::get();
    }
    public function update(Request $request)
    {
        $reqdata = $request->all();
        $row = factoryemployeeincentive::find($reqdata["id"]);
        $row->factory_employee_id =  $reqdata["factory_employee_id"];
        $row->year =  $reqdata["year"];
        $row->month =  $reqdata["month"];
        $row->incentive_unit =  $reqdata["incentive_unit"];
        $row->incentive_amount =  $reqdata["incentive_amount"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => "factoryemployeeincentive updated successfully",
            "data" => $row
        ], 200);
    }
    public function delete($id, Request $request)
    {

        $row = factoryemployeeincentive::find($id);
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
