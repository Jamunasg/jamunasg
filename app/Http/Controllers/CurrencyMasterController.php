<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\currencymaster;

class CurrencyMasterController extends Controller
{
    public function create(Request $request)
    {
        $reqdata = $request->all();
        $row = new currencymaster;
        $row->currency_name =  $reqdata["currency_name"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => " currency created successfully",
            "data" => $row
        ], 200);
    }
    public function list(Request $request)
    {
        return currencymaster::get();
    }
    public function update(Request $request)
    {
        $reqdata = $request->all();
        $row = currencymaster::find($reqdata["id"]);
        $row->currency_name =  $reqdata["currency_name"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => "currency updated successfully",
            "data" => $row
        ], 200);
    }
    public function delete($id, Request $request)
    {

        $row = currencymaster::find($id);
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
