<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model\employee;

class EmployeeController extends Controller
{
    public function create(Request $request)
    {
        $reqdata = $request->all();
        $row = new employee;
        $row->emp_name =  $reqdata["emp_name"];
        $row->emp_mobile_1 =  $reqdata["emp_mobile_1"];
        $row->emp_mobile_2 =  $reqdata["emp_mobile_2"];
        $row->emp_whatsapp =  $reqdata["emp_whatsapp"];
        $row->emp_email =  $reqdata["emp_email"];
        $row->emp_photo =  $reqdata["emp_photo"];
        $row->emp_DOB =  $reqdata["emp_DOB"];
        $row->emp_joindate =  $reqdata["emp_joindate"];
        $row->emp_gender =  $reqdata["emp_gender"];
        $row->emp_marital_status =  $reqdata["emp_marital_status"];
        $row->emp_physical_status =  $reqdata["emp_physical_status"];
        $row->emp_education =  $reqdata["emp_education"];
        $row->emp_languages_known =  $reqdata["emp_languages_known"];
        $row->emp_communication_address =  $reqdata["emp_communication_address"]; 
        $row->emp_city_id =  $reqdata["emp_city_id"];
        $row->emp_district_id =  $reqdata["emp_district_id"];
        $row->emp_state_id =  $reqdata["emp_state_id"];
        $row->emp_proof_type =  $reqdata["emp_proof_type"];
        $row->valid_check_status =  $reqdata["valid_check_status"];
        $row->file_1_front =  $reqdata["file_1_front"];
        $row->file_1_back =  $reqdata["file_1_back"];
        $row->is_active =  $reqdata["is_active"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => " districtmaster created successfully",
            "data" => $row
        ], 200);
    }
    public function list(Request $request)
    {
        return employee::get();
    }
    public function update(Request $request)
    {
        $reqdata = $request->all();
        $row = employee::find($reqdata["id"]);
        $row->emp_name =  $reqdata["emp_name"];
        $row->emp_mobile_1 =  $reqdata["emp_mobile_1"];
        $row->emp_mobile_2 =  $reqdata["emp_mobile_2"];
        $row->emp_whatsapp =  $reqdata["emp_whatsapp"];
        $row->emp_email =  $reqdata["emp_email"];
        $row->emp_photo =  $reqdata["emp_photo"];
        $row->emp_DOB =  $reqdata["emp_DOB"];
        $row->emp_joindate =  $reqdata["emp_joindate"];
        $row->emp_gender =  $reqdata["emp_gender"];
        $row->emp_marital_status =  $reqdata["emp_marital_status"];
        $row->emp_physical_status =  $reqdata["emp_physical_status"];
        $row->emp_education =  $reqdata["emp_education"];
        $row->emp_languages_known =  $reqdata["emp_languages_known"];
        $row->emp_communication_address =  $reqdata["emp_communication_address"]; 
        $row->emp_city_id =  $reqdata["emp_city_id"];
        $row->emp_district_id =  $reqdata["emp_district_id"];
        $row->emp_state_id =  $reqdata["emp_state_id"];
        $row->emp_proof_type =  $reqdata["emp_proof_type"];
        $row->valid_check_status =  $reqdata["valid_check_status"];
        $row->file_1_front =  $reqdata["file_1_front"];
        $row->file_1_back =  $reqdata["file_1_back"];
        $row->is_active =  $reqdata["is_active"];
        $row->save();
        return response()->json([
            "status" => true,
            "message" => "districtmaster updated successfully",
            "data" => $row
        ], 200);
    }
    public function delete($id, Request $request)
    {

        $row = employee::find($id);
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
