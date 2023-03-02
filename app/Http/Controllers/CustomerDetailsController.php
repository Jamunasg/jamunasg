<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model\customerdetails;

class CustomerDetailsController extends Controller
{
    public function create(Request $request)
    {
        $reqdata = $request->all();
        $row = new customerdetails;
        $row->customer_name =  $reqdata["customer_name"];
        $row->customer_mobile_1 =  $reqdata["customer_mobile_1"];
        $row->customer_mobile_2 =  $reqdata["customer_mobile_2"];
        $row->customer_whatsapp =  $reqdata["customer_whatsapp"];
        $row->customer_address =  $reqdata["customer_address"];
        $row->customer_email =  $reqdata["customer_email"];
        $row->customer_city_id =  $reqdata["customer_city_id"];
        $row->customer_district_id =  $reqdata["customer_district_id"];
        $row->customer_state_id =  $reqdata["customer_state_id"];
        $row->cread_by_id =  $reqdata["cread_by_id"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => " factoryemployee created successfully",
            "data" => $row
        ], 200);
    }
    public function list(Request $request)
    {
        return customerdetails::get();
    }
    public function update(Request $request)
    {
        $reqdata = $request->all();
        $row = customerdetails::find($reqdata["id"]);
        $row->customer_name =  $reqdata["customer_name"];
        $row->customer_mobile_1 =  $reqdata["customer_mobile_1"];
        $row->customer_mobile_2 =  $reqdata["customer_mobile_2"];
        $row->customer_whatsapp =  $reqdata["customer_whatsapp"];
        $row->customer_address =  $reqdata["customer_address"];
        $row->customer_email =  $reqdata["customer_email"];
        $row->customer_city_id =  $reqdata["customer_city_id"];
        $row->customer_district_id =  $reqdata["customer_district_id"];
        $row->customer_state_id =  $reqdata["customer_state_id"];
        $row->cread_by_id =  $reqdata["cread_by_id"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => "factoryemployee updated successfully",
            "data" => $row
        ], 200);
    }
    public function delete($id, Request $request)
    {

        $row = customerdetails::find($id);
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
