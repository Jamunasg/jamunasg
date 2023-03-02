<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model\productmaster;

class ProductMasterController extends Controller
{
    public function create(Request $request)
    {
        $reqdata = $request->all();
        $row = new productmaster;
        $row->product_name =  $reqdata["product_name"];
        $row->product_image =  $reqdata["product_image"];
        $row->product_measure =  $reqdata["product_measure"];
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
        return productmaster::get();
    }
    public function update(Request $request)
    {
        $reqdata = $request->all();
        $row = productmaster::find($reqdata["id"]);
        $row->product_name =  $reqdata["product_name"];
        $row->product_image =  $reqdata["product_image"];
        $row->product_measure =  $reqdata["product_measure"];
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

        $row = productmaster::find($id);
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
