<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model\gst;

class GstController extends Controller
{
    public function create(Request $request)
    {
        $reqdata = $request->all();
        $row = new gst;
        $row->gst =  $reqdata["gst"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => " gst created successfully",
            "data" => $row
        ], 200);
    }
    public function list(Request $request)
    {
        return gst::get();
    }
    public function update(Request $request)
    {
        $reqdata = $request->all();
        $row = gst::find($reqdata["id"]);
        $row->gst =  $reqdata["gst"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => "gst updated successfully",
            "data" => $row
        ], 200);
    }
    public function delete($id, Request $request)
    {

        $row = gst::find($id);
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
