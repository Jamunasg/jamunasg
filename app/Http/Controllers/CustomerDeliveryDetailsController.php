<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model\customer_delivery_details;


class CustomerDeliveryDetailsController extends Controller
{
    public function create(Request $request)
    {
        $reqdata = $request->all();
        $row = new customer_delivery_details;
        $row->customer_details_id =  $reqdata["customer_details_id"];
        $row->delivery_address =  $reqdata["delivery_address"];
        $row->delivery_city_id =  $reqdata["delivery_city_id"];
        $row->delivery_district_id =  $reqdata["delivery_district_id"];
        $row->delivery_state_id =  $reqdata["delivery_state_id"];
        $row->delivery_location_gps =  $reqdata["delivery_location_gps"];
        $row->delivery_x_latitude =  $reqdata["delivery_x_latitude"];
        $row->delivery_y_longitude =  $reqdata["delivery_y_longitude"];
        $row->created_by_id =  $reqdata["created_by_id"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => " customerdeliverydetails created successfully",
            "data" => $row
        ], 200);
    }
    public function list(Request $request)
    {
        return customer_delivery_details::get();
    }
    public function update(Request $request)
    {
        $reqdata = $request->all();
        $row = customer_delivery_details::find($reqdata["id"]);
        $row->customer_details_id =  $reqdata["customer_details_id"];
        $row->delivery_address =  $reqdata["delivery_address"];
        $row->delivery_city_id =  $reqdata["delivery_city_id"];
        $row->delivery_district_id =  $reqdata["delivery_district_id"];
        $row->delivery_state_id =  $reqdata["delivery_state_id"];
        $row->delivery_location_gps =  $reqdata["delivery_location_gps"];
        $row->delivery_x_latitude =  $reqdata["delivery_x_latitude"];
        $row->delivery_y_longitude =  $reqdata["delivery_y_longitude"];
        $row->created_by_id =  $reqdata["created_by_id"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => "customerdeliverydetails updated successfully",
            "data" => $row
        ], 200);
    }
    public function delete($id, Request $request)
    {

        $row = customer_delivery_details::find($id);
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
